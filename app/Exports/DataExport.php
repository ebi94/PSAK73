<?php

namespace App\Exports;

use App\Data;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataExport implements FromCollection, ShouldAutoSize, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Data::all();
    }

    public function headings(): array
    {
        $headArray = 
            ["No","Nama Perusahaan","Nomor Kontrak","Vendor","Jenis Sewa","ns_a","ns_b","ns_c1","ns_c2","ns_d1","ns_d2","is_1","is_2","is_3","is_4","is_5","is_6","is_7","Komponen","Lokasi","Tgl Dimulai Kontrak","Tgl Berakhir Kontrak","Nilai Kontrak"]
        ;
        return  $headArray;
    }
}
