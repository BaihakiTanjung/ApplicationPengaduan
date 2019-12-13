<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use App\jenis;
use App\santri;
use DB;
use RealRashid\SweetAlert\Facades\Alert;
use Validator, Redirect, Response, File;
use App\Exports\PengaduanExport;
use PDF;
use Maatwebsite\Excel\Facades\Excel;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('success_message')) {
            Alert::success('Berhasil  ', session('success_message'));
        };
        $pengaduan = DB::table('pengaduan')
            ->join('jenis', 'pengaduan.jenis_pengaduan_id', '=', 'jenis.id')
            ->join('users', 'pengaduan.users_id', '=', 'users.id')
            ->select('pengaduan.*', 'pengaduan.id', 'jenis.nama AS namajenis', 'users.name AS namausers', 'pengaduan.tgl_pengaduan', 'pengaduan.keterangan', 'pengaduan.status', 'pengaduan.bukti')->get();
        return view('laporanpengaduan.index', compact('pengaduan'));
    }

    public function pdf()
    {
        $pengaduan = DB::table('pengaduan')->get();
        $pdf = PDF::loadView('laporanpengaduan.cetakPDF', ['pengaduan' => $pengaduan]);
        return $pdf->stream('datapengaduan.pdf');
    }
    function excel()
    {

        return Excel::download(new PengaduanExport, 'pengaduan.xlsx');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporanpengaduan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required',
            'tanggal' => 'required'

        ], [
            'keterangan.required' => 'Pengaduan wajib diisi',
            'tanggal.required' => 'Tanggal wajib diisi'
        ]);

        if (!empty(request()->foto)) {
            request()->validate(['foto' => 'image|mimes:jpeg,png,jpg|max:2048',]);
            $namaFile = time() . '.' . request()->foto->extension();
            request()->foto->move(public_path('img'), $namaFile);
        } else {
            $namaFile = null;
        }

        DB::table('pengaduan')->insert(
            [
                'jenis_pengaduan_id' => $request->jenis,
                'users_id' => $request->users,
                'tgl_pengaduan' => $request->tanggal,
                'keterangan' => $request->keterangan,
                'bukti' => $namaFile
            ]
        );

        return redirect('/pengaduan1')->withSuccessMessage('Pengaduan berhasil di Kirim');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengaduan = Pengaduan::find($id);
        return view('laporanpengaduan.show', compact('pengaduan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengaduan = Pengaduan::where('id', $id)->get();
        return view('laporanpengaduan.edit', compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gambar = Pengaduan::where('id', $id)->first();

        if (!empty(request()->foto)) {
            File::delete('img/'.$gambar->file);
            request()->validate(['foto' => 'image|mimes:jpeg,png,jpg|max:2048',]);
            $namaFile = time() . '.' . request()->foto->extension();
            request()->foto->move(public_path('img'), $namaFile);
        } else {
            $namaFile = $gambar->bukti;
        }
        DB::table('pengaduan')->where('id', $id)->update([
            'jenis_pengaduan_id' => $request->jenis,
            'users_id' => $request->users,
            'tgl_pengaduan' => $request->tanggal,
            'keterangan' => $request->keterangan,
            'ustadz_id' => $request->ustadz,
            'status' => $request->status,
            'jawaban' => $request->jawaban,
            'bukti' => $namaFile
        ]);

        return redirect('/pengaduan')->withSuccessMessage('Tanggapan Berhasil di Kirim');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pengaduan')->where('id', $id)->delete();
        return redirect('/pengaduan')->with('sukses', 'Data berhasil dihapus');
    }
}
