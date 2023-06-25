<?php

namespace App\Http\Controllers\cabang;

use App\Models\User;
use App\Models\Anggota;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CabangController extends Controller
{

    private $anggota,$ranting,$user_login;

    public function __construct(Request $request)
    {
        $this->middleware(function ($request, $next) {
           $this->user_login = Auth::user();
           $this->anggota = Anggota::where('cabang', Auth::user()->cabang)->latest();
           $this->ranting = User::where('role', 'ranting')->where('cabang', Auth::user()->cabang)->where('verified', 'user')->latest();
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
        return view('cabang.dashboard.index',[
            'anggota' => $this->anggota->paginate(10),
            'ranting' => $this->ranting->get()
        ]);
    }

    public function ranting(){
        $ranting = $this->ranting;

        if(request('nama')){
            $ranting->where('username','like','%'.request('nama').'%');
        }
        if(request('ranting')){
            $ranting->where('ranting',request('ranting'));
        }
        if(request('nia')){
            $ranting->where('nia',request('nia'));
        }
        
        return view('cabang.ranting.index', [
            'ranting' => $ranting->paginate(20)
        ]);
    }

    public function ranting_create(){
        return view('cabang.ranting.add');
    }

    public function ranting_store(Request $request){
        $validasi = $request->validate([
            'username' => 'required',
            'ranting' => 'required',
            'email' => 'required|email:dns|unique:user,email'
        ]);
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
