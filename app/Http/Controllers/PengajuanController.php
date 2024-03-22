<?php

namespace App\Http\Controllers;

use App\Mail\SendAdmin;
use App\Models\Dapil;
use App\Models\Pengajuan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PengajuanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        if ($request->pilihan == NULL) {
            return back()->with('error', 'Silahkan Pilih Dapil');
        }else{
            $dat = Dapil::where('id', $request->pilihan)->first();

            $plussatu = $dat->pemilih + 1;

            if ($dat->kuota < $plussatu) {
                return back()->with('error', 'Kuota Sudah Penuh');
            } else {
                Pengajuan::create([
                    'tgl_pengajuan' => date('Y-m-d'),
                    'user_id' => Auth::user()->id,
                    'dapil_id' => $request->pilihan,
                    'status' => 'Diajukan'
                ]);

                Dapil::where('id', $request->pilihan)->update([
                    'pemilih' => $plussatu,
                ]);

                User::where('id', Auth::user()->id)->update([
                    'status' => 'sudah'
                ]);

                // $email = 'rezahawari19@gmail.com';
                // $data = [
                //     'tgl' => date('Y-m-d'),
                //     'name' => Auth::user()->name,
                //     'dapil' => $request->pilihan,
                //     'url' => 'http://127.0.0.1:8000/admin/pengajuan',
                // ];

                // Mail::to($email)->send(new SendAdmin($data));
                return redirect('/status')->with('send', 'Berhasil Mengajukan Dapil');
            }
        }

    }

}
