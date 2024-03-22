<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Dapil;
use App\Models\Pengajuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ResponseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        if($request->persetujuan == 'tolak'){
            User::where('id', $request->id)->update([
                'kelengkapan' =>  NULL,
                'status' => NULL
            ]);

            Pengajuan::where('id', $request->idpengajuan)->update([
                'status' => 'Ditolak',
                'alasan' => $request->alasan
            ]);

            $jumlah = Dapil::where('id' , $request->iddapil)->first();

            $tot = $jumlah->pemilih - 1;


            Dapil::where('id', $request->iddapil)->update(['pemilih' => $tot]);

            $dpeng = Pengajuan::where('id', $request->idpengajuan)->first();
            $data = [
                'name' => $dpeng->user->name,
                'title' => 'Mohon Maaf '. $dpeng->user->name,
                'isi' => 'Pengajuan anda Ditolak',
                'url' => 'http://127.0.0.1:8000/status',
            ];
            Mail::to($dpeng->user->emails)->send(new SendMail($data));

            return redirect('/admin/pengajuan')->with('success', 'Pengajuan Berhasil Direspon');
        }else{
            Pengajuan::where('id', $request->idpengajuan)->update([
                'status' => 'Diterima',
            ]);
            $dpeng = Pengajuan::where('id', $request->idpengajuan)->first();
            $data = [
                'name' => $dpeng->user->name,
                'title' => 'Selamat '. $dpeng->user->name,
                'isi' => 'Pengajuan anda diterima',
                'url' => 'http://127.0.0.1:8000/status',
            ];
            Mail::to($dpeng->user->emails)->send(new SendMail($data));

            return redirect('/admin/pengajuan')->with('success', 'Pengajuan Berhasil Direspon');

        }
    }
}
