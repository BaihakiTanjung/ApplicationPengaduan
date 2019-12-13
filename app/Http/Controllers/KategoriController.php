<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kategori;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;
use Validator, Redirect, Response, File;
use App\Exports\KategoriExport;
use Maatwebsite\Excel\Facades\Excel;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari kategori
        $kategori = DB::table('kategori')->get();
        if (session('success_message')) {
            Alert::success('Berhasil  ', session('success_message'));
        };
        // mengirim data kategori ke view index
        return view('kategori.index', compact('kategori'));
    }
    public function cetakpdf()
    {
        $kategori = Kategori::all();
        // $asal = DB::table('asal')->get();
    	$pdf = PDF::loadview('Kategori.cetakpdf', compact('kategori'));
        // return $pdf->download('dataasal.pdf');
        return $pdf->stream('datakategori.pdf');
    }

    public function export() 
    {
            return Excel::download(new KategoriExport, 'kategori.xlsx');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // method untuk menampilkan view form tambah pegawai
    public function create()
    {
        // memanggil view tambah
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('kategori')->insert([
            'nama' => $request->nama
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/kategori')->withSuccessMessage('Data berhasil dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $kategori = Kategori::where('id', $id)->get();

        return view('kategori/edit', compact('kategori'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('kategori')->where('id', $request->id)->update([
            'nama' => $request->nama
        ]);
        return redirect('/kategori')->with('suksesedit', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kategori')->where('id', $id)->delete();
        return redirect('/kategori')->with('sukses', 'Data berhasil dihapus');
    }
}
