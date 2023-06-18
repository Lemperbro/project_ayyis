<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Ranting;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Symfony\Contracts\Service\Attribute\Required;

class RantingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.ranting.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     return view('admin.ranting.add');   
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
        
        Ranting::create([
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ranting  $ranting
     * @return \Illuminate\Http\Response
     */
    public function show(Ranting $ranting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ranting  $ranting
     * @return \Illuminate\Http\Response
     */
    public function edit(Ranting $ranting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ranting  $ranting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ranting $ranting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ranting  $ranting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ranting $ranting)
    {
        //
    }
}
