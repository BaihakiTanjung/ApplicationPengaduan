<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Asal;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;
use Validator, Redirect, Response, File;
use App\Exports\AsalExport;
use Maatwebsite\Excel\Facades\Excel;



class AsalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari table asal
        $asal = DB::table('asal')->get();
        // fungsi alert ketika success di halaman index
        if (session('success_message')) {
            Alert::success('Berhasil  ', session('success_message'));
        };
        // mengambil data tampilan di folder asal dengan file index dengan array bernama asal
        return view('asal.index', compact('asal'));
    }

    public function cetakpdf()
    {
        $asal = Asal::all();
    	$pdf = PDF::loadview('asal.cetakpdf', compact('asal'));
        return $pdf->stream('dataasal.pdf');
    }

    public function export() 
{
        return Excel::download(new AsalExport, 'asal.xlsx');
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('asal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('asal')->insert([
            'nama' => $request->nama
        ]);

        return redirect('/asal')->withSuccessMessage('Data Berhasil Dimasukkan');
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
        $asal = Asal::where('id', $id)->get();
        return view('asal/edit', compact('asal'));
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
        DB::table('asal')->where('id', $id)->update([
            'nama' => $request->nama
        ]);

        return redirect('/asal')->with('suksesedit', 'Data Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('asal')->where('id', $id)->delete();
        return redirect('/asal')->with('sukses', 'Data berhasil dihapus');  
    }
}
