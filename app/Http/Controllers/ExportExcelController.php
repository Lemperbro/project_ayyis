<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Exports\ExportExcel;
use Illuminate\Http\Request;
use App\Exports\ExportExcelUser;
use App\Exports\ExportExcelAnggota;
use App\Http\Controllers\Controller;
use App\Http\Resources\AnggotaResource;
use App\Http\Resources\ExcelAnggotaResource;
use App\Http\Resources\UserResource;
use App\Models\Anggota;
use Maatwebsite\Excel\Facades\Excel;

class ExportExcelController extends Controller
{


    public function ExportAnggota($data)
    {
        $data = AnggotaResource::collection($data);
        return Excel::download(new ExportExcelAnggota($data), 'Data-Anggota-CiptaSejati.xlsx');
    }

    public function ExportUser($data)
    {
        $data = UserResource::collection($data);
        return Excel::download(new ExportExcelUser($data), 'Data-User-CiptaSejati.xlsx');
    }
}

