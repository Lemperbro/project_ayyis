<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use Maatwebsite\Excel\Concerns\WithDrawings;


class ExportExcelUser implements FromCollection, WithHeadings, WithDrawings
{

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return $this->data;
    }


    // public function map($row): array
    // {
    //     return [
    //         'gambar' => asset('fp_user/'.$row->image)
    //     ];
    // }



    public function headings(): array
    {
        return [
            'No',
            'Username',
            'NIA',
            'Nomor Telphone',
            'Email',
            'Ranting',
            'Cabang',
            'Role'
        ];
    }
}
