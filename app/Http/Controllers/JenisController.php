<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jenis;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;
use Validator, Redirect, Response, File;
use App\Exports\JenisExport;
use Maatwebsite\Excel\Facades\Excel;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis = DB::table('jenis')->get(); 
        if (session('success_message')) {
            Alert::success('Berhasil  ', session('success_message'));
        };
        return view('jenis.index', compact('jenis'));
    }

    public function cetakpdf()
    {
        $jenis = Jenis::all();
    	$pdf = PDF::loadview('jenis.cetakpdf', compact('jenis'));
        return $pdf->stream('datajenis.pdf');
    }

    public function export() 
    {
            return Excel::download(new JenisExport, 'asal.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('jenis')->insert([
            'nama' => $request ->nama
        ]);

        return redirect('/jenis')->withSuccessMessage('Data berhasil dimasukkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jenis = Jenis::where('id', $id)->get();

        return view('jenis/edit', compact('jenis'));  
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
        DB::table('jenis')->where('id', $request->id)->update([
            'nama' => $request->nama
        ]);
        return redirect('/jenis')->with('suksesedit', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('jenis')->where('id', $id)->delete();

        return redirect('/jenis')->with('sukses', 'Data berhasil dihapus');
    }
}
