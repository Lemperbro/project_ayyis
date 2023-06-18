<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AdminDashboard;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function konfirmasi()
    {
        $data = User::latest()->where('verified', 0);

        return view('admin.konfirmasi.index',[
           'data' => $data->get(),
        ]);
        
    }



    // public function konfirmasi(Request $request, $userId)
    // {
    //     $user = User::findOrFail($userId);
    //     $user->verified_by_admin = true;
    //     $user->save();

    //     return redirect()->route('admin.konfirmasi.index')->with('success', 'Akun pengguna berhasil diverifikasi oleh admin.');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminDashboard  $adminDashboard
     * @return \Illuminate\Http\Response
     */
    public function show(AdminDashboard $adminDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminDashboard  $adminDashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminDashboard $adminDashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminDashboard  $adminDashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminDashboard $adminDashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminDashboard  $adminDashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminDashboard $adminDashboard)
    {
        //
    }
}
