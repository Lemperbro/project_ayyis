<?php

namespace App\Http\Controllers\ranting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Anggota;
use Carbon\Carbon;
use Symfony\Contracts\Service\Attribute\Required;

class DashboardRantingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ranting.dashboard.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('ranting.add');   
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
            'foto' => 'required',
            'tanggal_lahir' => 'required|date',
            'nia' => 'required|min:10',
            'alamat' => 'required|max:255',
            'ranting' => 'required|max:255',
            'cabang' => 'required|max:255',
            'tingkatan' => 'required'
        ]);
        
        if ($files = $request->file('foto')) {
            $extension = $files->getClientOriginalExtension();
            $name = hash('sha256', time()) . '.' . $extension;
            $files->move('image', $name);
        }
        
        Anggota::create([
            'nama' => $validasi['nama'],
            'foto' => $name,
            'tanggal_lahir' => $validasi['tanggal_lahir'],
            'nia' => $validasi['nia'],
            'alamat' => $validasi['alamat'],
            'ranting' => $validasi['ranting'],
            'cabang' => $validasi['cabang'],
            'tingkatan' => $validasi['tingkatan']
        ]);
        
            return redirect('/ranting')->with('success', 'successful additional to the Driver');
    }


}
