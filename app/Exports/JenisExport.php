<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Jenis;

class JenisExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $jenis = Jenis::All();

        return $jenis;
    }
}
