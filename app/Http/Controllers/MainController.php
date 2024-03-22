<?php

namespace App\Http\Controllers;

use App\Models\Dapil;
use App\Models\Pengajuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function goHome()
    {
        # code...
        $data = User::where('id', Auth::user()->id)->get();
        $nama = NULL;
        $emails = NULL;
        $tgl_lahir = NULL;
        $no_telp = NULL;
        $alamat = NULL;
        $latar = NULL;
        $jaringan = NULL;
        $ktp = NULL;
        $kta = NULL;
        $bpjs = NULL;
        $cv = NULL;
        $rekening = NULL;
        $npwp = NULL;
        $pernyataan = NULL;
        $pas_foto = NULL;
        $lengkapProfil = true;
        $lengkapDoc = true;
        foreach($data as $d){
            $nama = $d->name;
            $emails = $d->emails;
            $tgl_lahir = $d->tgl_lahir;
            $no_telp = $d->no_telp;
            $alamat = $d->alamat;
            $latar = $d->latar_belakang;
            $jaringan = $d->jaringan;

            $ktp = $d->ktp;
            $kta = $d->kta;
            $bpjs = $d->bpjs;
            $cv = $d->cv;
            $rekening = $d->rekening;
            $npwp = $d->npwp;
            $pernyataan = $d->pernyataan;
            $pas_foto = $d->pas_foto;
        }
        if($nama == NULL){
            $lengkapProfil = false;
        };
        if($emails == NULL){
            $lengkapProfil = false;
        };
        if($tgl_lahir == NULL){
            $lengkapProfil = false;
        };
        if($no_telp == NULL){
            $lengkapProfil = false;
        };
        if($alamat == NULL){
            $lengkapProfil = false;
        };
        if($latar == NULL){
            $lengkapProfil = false;
        };
        if($jaringan == NULL){
            $lengkapProfil = false;
        };

        if($ktp == NULL){
            $lengkapDoc = false;
        };
        if($kta == NULL){
            $lengkapDoc = false;
        };
        if($bpjs == NULL){
            $lengkapDoc = false;
        };
        if($cv == NULL){
            $lengkapDoc = false;
        };
        if($rekening == NULL){
            $lengkapDoc = false;
        };
        if($npwp == NULL){
            $lengkapDoc = false;
        };
        if($pernyataan == NULL){
            $lengkapDoc = false;
        };
        if($pas_foto == NULL){
            $lengkapProfil = false;
        };
        return view('Home', ['profil' => $lengkapProfil, 'doc' => $lengkapDoc]);
    }

    public function goProfile()
    {
        # code...
        return view('profile');
    }

    public function goDoc()
    {
        # code...
        return view('dokumen');
    }

    public function goStatus()
    {
        # code...
        return view('status', ['pengajuan' => Pengajuan::where('user_id', Auth::user()->id)->get()]);
    }

    public function goPengajuan()
    {
        # code...
        if(Auth::user()->kelengkapan != 'lengkap' || Auth::user()->status != NULL){
            return back()->with('error' , 'Data atau dokumen yang anda kirimkan belum lengkap');
        }else{
            return view('pengajuan', ['dapil' => Dapil::where('status','active')->get()]);
        }
    }



}
