<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Pengaduan;

class PengaduanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pengaduan::all();
    }
}
