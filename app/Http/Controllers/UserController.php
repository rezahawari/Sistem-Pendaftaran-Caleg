<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function storeAdmin(Request $request)
    {
        # code...
        User::create([
            'name' => $request->nama,
            'email' => $request->username,
            'password' => Hash::make($request->pass),
            'pass_view' => Crypt::encrypt($request->pass),
            'role' => 'Admin'
        ]);

        return back()->with('success', 'Akun berhasil dibuat');
    }

    public function destroy(User $user)
    {
        # code...
        User::destroy($user->id);
        return back()->with('success', 'Akun berhasil dihapus');
    }

    public function storeCaleg(Request $request)
    {
        # code...
        User::create([
            'name' => $request->nama,
            'email' => $request->username,
            'password' => Hash::make($request->pass),
            'pass_view' => Crypt::encrypt($request->pass),
            'role' => 'Caleg'
        ]);

        return back()->with('success', 'Akun berhasil dibuat');
    }

    public function destroyCaleg(User $user)
    {
        if(request('what')){
            User::destroy($user->id);
            return back()->with('success', 'Caleg berhasil dihapus');
        }else{
            return back()->with('error', 'No Access');
        }
    }
}
