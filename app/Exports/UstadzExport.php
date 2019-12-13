<?php

namespace App\Exports;

use App\Ustadz;
use Maatwebsite\Excel\Concerns\FromCollection;

class UstadzExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ustadz::all();
    }
}
