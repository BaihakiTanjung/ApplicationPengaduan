<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ustadz;
use PDF;
use DB;
use App\Exports\UstadzExport;
use RealRashid\SweetAlert\Facades\Alert;
use Validator, Redirect, Response, File;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class Ustadzcontroller extends Controller
{
	public function index()
	{

		if (session('success_message')) {
			Alert::success('Berhasil  ', session('success_message'));
		};
		$ar_ustadz = DB::table('ustadz')
			->join('asal', 'ustadz.asal_id', '=', 'asal.id')
			->select('ustadz.*', 'ustadz.id', 'ustadz.nip', 'ustadz.nama', 'asal.nama AS asal', 'ustadz.foto')->get();
		return view('ustadz.index', compact('ar_ustadz'));
	}
	public function pdf()
	{
		$ar_ustadz = DB::table('ustadz')->get();
		$pdf = PDF::loadView('ustadz.cetakPDF', ['ar_ustadz' => $ar_ustadz]);
		return $pdf->stream('data_ustadz.pdf');
	}
	function excel()
	{

		return Excel::download(new UstadzExport, 'ustadz.xlsx');
	}

	public function show($id)
	{
		$ustadz = Ustadz::find($id);
		return view('ustadz.show', compact('ustadz'));
	}
	public function create()
	{
		return view('ustadz.create');
	}
	public function store(Request $request)
	{
		$request->validate([
            'asal' => 'required',
            'tanggal' => 'required'

        ], [
            'asal.required' => 'Asal wajib diisi',
            'tanggal.required' => 'Tanggal wajib diisi'
        ]);
		if (!empty(request()->foto)) {
			request()->validate(['foto' => 'image|mimes:jpeg,png,jpg|max:2048',]);
			$namaFile = time() . '.' . request()->foto->extension();
			request()->foto->move(public_path('img'), $namaFile);
		} else {
			$namaFile = null;
		}
		DB::table('ustadz')->insert([
			'asal_id' => $request->asal,
			'nip' => $request->nip,
			'nama' => $request->nama,
			'jabatan' => $request->jabatan, 
			'tmp_lahir' => $request->tempat,
			'tgl_lahir' => $request->tanggal,
			'alamat' => $request->alamat,
			'hp' => $request->hp,
			'email' => $request->email,
			'foto' => $namaFile
		]);
		return redirect('/ustadz')->withSuccessMessage('Data Berhasil Dimasukkan');
	}
	public function destroy($id)
	{
		DB::table('ustadz')->where('id', $id)->delete();
		return redirect('/ustadz')->with('sukses', 'Data berhasil dihapus');
	}

	public function edit($id)
	{
		$ustadz = Ustadz::where('id', $id)->get();
		return view('ustadz/edit', compact('ustadz'));
	}

	public function update(Request $request, $id)
	{

		$gambar2 = Ustadz::where('id', $id)->first();

		if (!empty(request()->foto)) {
			request()->validate(['foto' => 'image|mimes:jpeg,png,jpg|max:2048',]);
			$namaFile = time() . '.' . request()->foto->getClientOriginalExtension();
			request()->foto->move(public_path('img'), $namaFile);
		} else {
			$namaFile = $gambar2->foto;
		}

		DB::table('ustadz')->where('id', $id)->update([
			'asal_id' => $request->asal,
			'nip' => $request->nip,
			'nama' => $request->nama,
			'jabatan' => $request->jabatan,
			'tmp_lahir' => $request->tempat,
			'tgl_lahir' => $request->tanggal,
			'alamat' => $request->alamat,
			'hp' => $request->hp,
			'email' => $request->email,
			'foto' => $namaFile
		]);

		return redirect('/ustadz')->with('suksesedit', 'Ustadz Berhasil diedit');
	}
}
