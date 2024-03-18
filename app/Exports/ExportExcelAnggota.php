<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithDrawings;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;


class ExportExcelAnggota extends ExportBase implements FromCollection,WithColumnWidths
{

    private $data;
    private static $counter = 0;

    // protected $row_height = 50;
    // protected $column_width = 30;



    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return $this->data;
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 40,      
            'C' => 25,      
            'D' => 25,      
            'E' => 45,      
            'F' => 25,      
            'G' => 25,      
            'H' => 25,      
            // 'I' => 15,      
        ];
    }

    public function map($row): array
    {
        self::$counter++;

        $this->add_column('No', self::$counter);
        $this->add_column('admin_id', $row['admin_id']);
        $this->add_column('Nama', $row['nama']);
        $this->add_column('NIA', $row['nia']);
        $this->add_column('Tempat, Tanggal Lahir', $row['ttl']);
        $this->add_column('Alamat', $row['alamat']);
        $this->add_column('Ranting', $row['ranting']);
        $this->add_column('Cabang', $row['cabang']);
        $this->add_column('Tingkatan', $row['tingkatan']);
        // $this->add_column('Gambar', $this->draw('ft_anggota/'.$row['image']));

        return $this->get_row();
    }
}
