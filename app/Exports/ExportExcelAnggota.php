<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;


class ExportExcelAnggota implements FromCollection, WithHeadings, WithDrawings, ShouldAutoSize
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

    public function headings(): array
    {
        return [
            'No',
            'Nama',
            'NIA',
            'Tempat, Tanggal Lahir',
            'Alamat',
            'Ranting',
            'Cabang',
            'Tingkatan',
            'Gambar'
        ];
    }

    public function drawings(): array
    {
        $drawings = [];

        foreach ($this->data as $key => $anggota) {
            $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
            $drawing->setPath(public_path('ft_anggota/' . $anggota->image));
            $drawing->setCoordinates('J' . $key + 1);
            $drawing->setWidth(80);
            $drawing->setHeight(80);
            $drawings[] = $drawing;
        }

        return $drawings;
    }

}
