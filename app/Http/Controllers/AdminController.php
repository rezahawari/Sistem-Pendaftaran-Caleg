<?php

namespace App\Http\Controllers;

use App\Models\Dapil;
use App\Models\Pengajuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function directtodash()
    {
        if (Auth::user()->role == 'Admin') {
            return redirect('/admin/dashboard');
        } else {
            return back()->with('error','No Access');
        }
    }

    public function  goDashboard()
    {
        if (Auth::user()->role == 'Admin') {
            $path = public_path('geojson/jateng.geojson');
            $data = json_decode(file_get_contents($path), true);
            return view('Admin.db',[
                'tcaleg' => count(User::where('role', 'Caleg')->get()),
                'tblcaleg' => count(User::where('role', 'Caleg')->where('kelengkapan', NULL)->get()),
                'tbmcaleg' =>count(User::where('role', 'Caleg')->where('status', NULL)->get()),
                'tp' => count(Pengajuan::all()),
                'dapil' => Dapil::all()
            ]);
        } else {
            return back()->with('error','No Access');
        }

    }

    public function goAdminDetail(User $user)
    {
        if (Auth::user()->role == 'Admin') {
            if(request('info') == NULL){
                return back()->with('error', 'Access Denied');
            }else{
                return view('Admin.detail', compact('user'));
            }
        } else {
            return back()->with('error','No Access');
        }

    }
    public function goPengajuanDetail(User $user, Pengajuan $pengajuan)
    {
        if (Auth::user()->role == 'Admin') {
            if(request('info') == NULL){
                return back()->with('error', 'Access Denied');
            }else{
                return view('Admin.detail', ['user' => $user , 'pengajuan' => $pengajuan]);
            }
        } else {
            return back()->with('error','No Access');
        }

    }



    public function goAdminPengajuan()
    {
        if (Auth::user()->role == 'Admin') {
            return view('Admin.pendaftar' , ['pengajuan' => Pengajuan::with(['user', 'dapil'])->latest()->get()]);
        } else {
            return back()->with('error','No Access');
        }

    }

    public function goAdminUser()
    {
        if (Auth::user()->role == 'Admin') {
            return view('Admin.user', ['user' => User::where('role', 'Admin')->get()]);
        } else {
            return back()->with('error','No Access');
        }

    }

    public function goAdminCaleg()
    {
        if (Auth::user()->role == 'Admin') {
            return view('Admin.caleg', ['user' => User::where('role', 'Caleg')->get()]);
        } else {
            return back()->with('error','No Access');
        }

    }

    public function goDapil()
    {
        if (Auth::user()->role == 'Admin') {
            return view('Admin.dapil', ['dapil' => Dapil::all()]);
        } else {
            return back()->with('error','No Access');
        }

    }
    public function editdapil(Dapil $dapil)
    {
        if (Auth::user()->role == 'Admin') {
            return view('Admin.editDapil', ['dapil' => $dapil]);
        } else {
            return back()->with('error','No Access');
        }

    }

}
