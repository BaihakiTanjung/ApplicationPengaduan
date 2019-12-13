<?php

namespace App\Exports;

use App\Santri;
use Maatwebsite\Excel\Concerns\FromCollection;

class SantriExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Santri::all();
    }
}
