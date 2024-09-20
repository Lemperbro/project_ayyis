<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminConfirmController extends Controller
{
    //

    private $confirmCabang;

    public function __construct()
    {
        $this->confirmCabang = User::whereIn('role', ['cabang','ranting'])->where('verified', 'register');
    }


    public function index()
    {
        $data = $this->confirmCabang;
        if(request('search')){
            $data->where('username','like','%'.request('search').'%')->orWhere('nia','like','%'.request('search').'%');
        }
        $appendsPaginate = [
            'search' => request('search')
        ];
        return view('admin.konfirmasi.index', [
            'data' => $data->paginate(10),
            'appendsPaginate' => $appendsPaginate 
        ]);
        
    }

    public function confirm($id){
        $this->confirmCabang->where('id', $id)->update([
            'verified' => 'user'
        ]);

        return redirect()->back()->with('toast_success', 'Berhasil Mengkonfirmasi Akun');
    }

    public function tolak($id){
        $this->confirmCabang->where('id', $id)->delete();

        return redirect()->back()->with('toast_success', 'Akun Berhasil Ditolak');
    }
    
}
