<?php

namespace App\Exports;
use App\Kategori;

use Maatwebsite\Excel\Concerns\FromCollection;

class KategoriExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $kategori = Kategori::All();

        return $kategori;
    }
}
