<?php

namespace App\Http\Controllers\ranting;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class DashboardRantingController extends Controller
{

    private $anggota,$adminRantingCount, $authRanting;

    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->anggota = Anggota::where('ranting', Auth()->user()->ranting)->where('cabang', Auth()->user()->cabang)->latest();
            $this->adminRantingCount = User::where('role', 'ranting')->where('ranting', Auth()->user()->ranting)->where('verified', 'user')->latest();
            $this->authRanting = Auth()->user()->ranting;
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = $this->anggota;
        $adminRantingCount = $this->adminRantingCount->get();
        return view('ranting.dashboard.index',[
            'anggotaCount' => $anggota->get()->count(),
            'adminRantingCount' => $adminRantingCount,
            'dataAnggota' => $anggota->paginate(10) 
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ranting.anggota.add');
    }

    public function anggota()
    {
        $data = $this->anggota;
        if(request('nama')){
            $data->where('nama', 'like', '%'.request('nama').'%');
        }

        if(request('nia')){
            $data->where('nia', request('nia'));
        }

        return view('ranting.anggota.index',[
            'data' => $data->paginate(20)
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required|max:255',
            'image' => 'required',
            'ttl' => 'required',
            'nia' => 'required|min:10|unique:anggotas,nia',
            'alamat' => 'required|max:255',
            'tingkatan' => 'required'
        ]);

        if ($files = $request->file('image')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.' . $extension;
            $files->move('ft_anggota', $name);
        }
        $ranting = Auth()->user()->ranting;
        $cabang = Auth()->user()->cabang;

        Anggota::create([
            'nama' => $validasi['nama'],
            'image' => $name,
            'ttl' => $validasi['ttl'],
            'nia' => $validasi['nia'],
            'alamat' => $validasi['alamat'],
            'ranting' => $ranting,
            'cabang' => $cabang,
            'tingkatan' => $validasi['tingkatan']
        ]);

        return redirect('/ranting')->with('success', 'berhasil menambahkan data anggota');
    }

    public function delete(Anggota $id){
        $id->delete();

        try{
            return redirect()->back()->with('toast_success', 'Berhasil Menghapus Anggota');
        }catch(Exception $e){
            return redirect()->back()->with('toast_error', 'Tidak Berhasil Menghapus Anggota');
        }
    }
}
