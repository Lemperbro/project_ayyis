<?php

namespace App\Http\Controllers\cabang;

use App\Http\Controllers\ApiCabangRanting\ApiCabangRantingController;
use App\Models\User;
use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ExportExcelController;
use Exception;
use Illuminate\Support\Facades\Auth;

class CabangController extends Controller
{

    private $anggota,$ranting,$user_login, $ApiCabangRanting,$rantingConfirm,$authCabang, $ExportExcel;

    public function __construct(Request $request,ApiCabangRantingController $ApiCabangRanting)
    {
        $this->middleware(function ($request, $next) {
           $this->user_login = Auth::user();
           $this->anggota = Anggota::where('cabang', Auth::user()->cabang)->latest();
           $this->ranting = User::where('role', 'ranting')->where('cabang', Auth::user()->cabang)->where('verified', 'user')->latest();
           $this->rantingConfirm = User::where('role', 'ranting')->where('cabang', Auth::user()->cabang)->where('verified', 'register')->latest();
           $this->authCabang = Auth::user()->cabang;
            return $next($request);
        });

        $this->ApiCabangRanting = $ApiCabangRanting;
        $this->ExportExcel = new ExportExcelController();
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('cabang.dashboard.index',[
            'anggota' => $this->anggota->paginate(10),
            'ranting' => $this->ranting->paginate(10)
        ]);
    }

    public function ranting(){
        $ranting = $this->ranting;

        if(request('nama')){
            $ranting->where('username','like','%'.request('nama').'%');
        }
        if(request('ranting')){
            $ranting->where('ranting',strtolower(request('ranting')));
        }
        if(request('nia')){
            $ranting->where('nia',request('nia'));
        }

        $CabangApi = $this->ApiCabangRanting->cabangApi();

        
        $filteredData = collect($CabangApi)->filter(function ($item) {
            // Kondisi filter
            return $item['name'] == strtoupper(Auth()->user()->cabang);
            
        });

        foreach($filteredData as $a ){
            $rantingApi = $this->ApiCabangRanting->rantingApi($a['id']);
        }

        if(request('download') == true){
            $downloadExcel = $ranting->get();
            return $this->ExportExcel->ExportUser($downloadExcel);
        }
        $appendsPaginate = [
            'nama' => request('nama'),
            'ranting' => request('ranting'),
            'nia' => request('nia')
        ];

        return view('cabang.ranting.index', [
            'ranting' => $ranting->paginate(20),
            'filter_ranting' => $rantingApi,
            'appendsPaginate' => $appendsPaginate
        ]);
    }

    public function ranting_create(){
        $CabangApi = $this->ApiCabangRanting->cabangApi();

        
        $filteredData = collect($CabangApi)->filter(function ($item) {
            // Kondisi filter
            return $item['name'] == strtoupper(Auth()->user()->cabang);
        });

        foreach($filteredData as $a ){
            $rantingApi = $this->ApiCabangRanting->rantingApi($a['id']);
        }

        return view('cabang.ranting.add',[
            'ranting' => $rantingApi
        ]);
        
    }

    public function ranting_store(Request $request){


        $validasi = $request->validate([
            'username' => 'required',
            'nia' => 'required|unique:users,nia',
            'ranting' => 'required',
            'email' => 'required|email:dns|unique:users,email',
            'telp' => 'required|min:8',
            'password' => 'required|confirmed|min:5|max:255'
        ],[
            'username.required' => 'Username Harus Di isi',
            'nia.required' => 'Nia Harus Di isi',
            'nia.unique' => 'Nia Yang Anda Masukan Sudah Tersedia',
            'ranting.required' => 'Ranting Harus Di Isi',
            'email.required' => 'Email Harus Di Isi',
            'email.unique' => 'Email Sudah Di pakai',
            'telp.required' => 'Nomor Telpon Harus Di isi',
            'telp.min' => 'Nomor Telpon Harus minimal :min',
            'password.required' => 'Password Harus Di isi',
            'password,min' => 'Password Harus minimal :min',
            'password.max' => 'Password maximal :max',
            'password.confirmed' => 'Password Tidak Sama'
        ]);

        $validasi['password'] = bcrypt($validasi['password']); 
        
        $up = User::create([
            'username' => $request->username,
            'nia' => $request->nia,
            'telp' => $request->telp,
            'email' => $request->email,
            'password' => $validasi['password'],
            'role' => 'ranting',
            'ranting' => strtolower($request->ranting),
            'cabang' => $this->user_login->cabang,
            'verified' => 'user'
        ]);

        if($up){
            return redirect('/cabang/ranting')->with('toast_success', 'Berhasil Menambah Data Admin Ranting');
        }else{
            return redirect('/cabang/ranting')->with('toast_error', 'Gagal Menambah Data Admin Ranting');
        }
    }
    public function rantingDelete(User $id){
        $delete = $id->delete();
        if($delete){
            return redirect()->back()->with('toast_success', 'Berhasil menghapus data');
        }else{
            return redirect()->back()->with('toast_error', 'Tidak berhasil menghapus data');
        }
    }
    public function anggota(){
        $data = $this->anggota;

        $CabangApi = $this->ApiCabangRanting->cabangApi();

        
        $filteredData = collect($CabangApi)->filter(function ($item) {
            // Kondisi filter
            return $item['name'] == strtoupper(Auth()->user()->cabang);
        });

        foreach($filteredData as $a ){
            $rantingApi = $this->ApiCabangRanting->rantingApi($a['id']);
        }

        if(request('nama')){
            $data->where('nama','like','%'.request('nama').'%');
        }

        if(request('ranting') !== null){
            $data->where('ranting', strtolower(request('ranting')));
        }

        if(request('nia')){
            $data->where('nia', request('nia'));
        }

        if(request('download') == true){
            $downloadExcel = $data->get();
            return $this->ExportExcel->ExportAnggota($downloadExcel);
        }

        $appendsPaginate = [
            'nama' => request('nama'),
            'ranting' => request('ranting'),
            'nia' => request('nia')
        ];
        return view('cabang.anggota.index', [
            'data' => $data->paginate(20),
            'ranting' => $rantingApi,
            'appendsPaginate' => $appendsPaginate
        ]);
    }

    public function confirmation(){

        $data = $this->rantingConfirm;

        if(request('ranting')){
            $data->where('ranting', request('ranting'));
        }

        $appendsPaginate = [
            'ranting' => request('ranting')
        ];
        return view('cabang.konfirmasi.index', [
            'data' => $data->paginate(10),
            'appendsPaginate' => $appendsPaginate
        ]);
    }

    public function confirmation_Action($tipe, $id){
        $data = $this->rantingConfirm->where('id', $id);
        if($tipe == 'confirmation'){
            $data->update([
                'verified' => 'user'
            ]);
        }elseif($tipe == 'tolak'){
            $data->forcedelete();
            return redirect()->back()->with('toast_success', 'Berhasil Menolak Akun Dan Berhasil Dihapus');
        }elseif(!in_array($tipe,['confirmation', 'tolak'])){
            return redirect()->back()->with('toast_error', 'Gagal Mengkonfirmasi Akun');
        }

        try {
            return redirect()->back()->with('toast_success', 'Berhasil Mengkonfirmasi Akun');
        }catch(Exception $e){
            return redirect()->back()->with('toast_error', 'Gagal Mengkonfirmasi Akun');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }




}
