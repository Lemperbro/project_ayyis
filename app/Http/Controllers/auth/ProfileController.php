<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class ProfileController extends Controller
{
    //

    public function index()
    {
        $data = Auth()->user();
        return view('edit_profile.index', [
            'data' => $data
        ]);
    }

    public function update(Request $request, User $id)
    {

        if ($request->password !== null) {
            $request->validate([
                'username' => 'required',
                'nia' => 'required',
                'telp' => 'required',
                'email' => 'required',
                'password' => 'required|confirmed|min:5|max:255'
            ]);

            $password = bcrypt($request->password);

            $id->update([
                'password' => $password
            ]);
            try {
                $changePassword = true;
            } catch (Exception $e) {
                $changePassword = false;
            }
        } else {
            $request->validate([
                'username' => 'required',
                'nia' => 'required',
                'telp' => 'required',
                'email' => 'required',
            ]);
        }

        $ceknia = User::where('nia', $request->nia)->where('id', '!=', Auth()->user()->id)->get();
        $cekemail = User::where('email', $request->email)->where('id', '!=', Auth()->user()->id)->get();

        if ($ceknia->count() > 0) {
            return redirect()->back()->with('toast_error', 'Nia sudah terdaftar');
        }
        if ($cekemail->count() > 0) {
            return redirect()->back()->with('toast_error', 'Email Sudah dipakai');
        }


        $id->update([
            'username' => $request->username,
            'nia' => $request->nia,
            'telp' => $request->telp,
            'email' => $request->email,
        ]);

        try {
            if ($request->password !== null) {
                if ($changePassword == true) {
                    return redirect()->back()
                        ->with('toast_success', 'Berhasil memperbarui data')
                        ->with('changePasswordTrue', 'Berhasil memperbarui password');
                } else {
                    return redirect()->back()
                        ->with('toast_success', 'Berhasil memperbarui data')
                        ->with('changePasswordFalse', 'Tidak Berhasil memperbarui Password');
                }
            } else {
                return redirect()->back()->with('toast_success', 'Berhasil memperbarui data');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('toast_error', 'Gagal memperbarui data');
        }
        
    }
}
