<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function storeprofil(Request $request)
    {
        if ($request->foto == NULL) {
            # code...
            $explode = ltrim($request->telp, '0');
            User::where('id', Auth::user()->id)->update([
                'name' => $request->nama,
                'emails' => $request->email,
                'tgl_lahir' => $request->date,
                'no_telp' => $explode,
                'alamat' => $request->alamat,
                'latar_belakang' => $request->latar,
                'jaringan' => $request->jaringan,
            ]);

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
            $lengkap = true;
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
                $lengkap = false;
            };
            if($emails == NULL){
                $lengkap = false;
            };
            if($tgl_lahir == NULL){
                $lengkap = false;
            };
            if($no_telp == NULL){
                $lengkap = false;
            };
            if($alamat == NULL){
                $lengkap = false;
            };
            if($latar == NULL){
                $lengkap = false;
            };
            if($jaringan == NULL){
                $lengkap = false;
            };
            if($ktp == NULL){
                $lengkap = false;
            };
            if($kta == NULL){
                $lengkap = false;
            };
            if($bpjs == NULL){
                $lengkap = false;
            };
            if($cv == NULL){
                $lengkap = false;
            };
            if($rekening == NULL){
                $lengkap = false;
            };
            if($npwp == NULL){
                $lengkap = false;
            };
            if($pernyataan == NULL){
                $lengkap = false;
            };
            if($pas_foto == NULL){
                $lengkap = false;
            };

            if($lengkap == true){
                User::where('id',Auth::user()->id)->update([
                    'kelengkapan' => 'lengkap'
                ]);
            }else{
                User::where('id',Auth::user()->id)->update([
                    'kelengkapan' => NULL
                ]);
            }

        }else{
            $file = $request->foto;
            $filenameWithExt = $file->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $file->getClientOriginalExtension();
            $filenameSimpan = 'pasfoto'.Auth::user()->email.'_'.time().'.'.$extension;
            $file->move('filecaleg/pas_foto',$filenameSimpan);

            $explode = ltrim($request->telp, '0');

            User::where('id', Auth::user()->id)->update([
                'name' => $request->nama,
                'emails' => $request->email,
                'tgl_lahir' => $request->date,
                'no_telp' => $explode,
                'alamat' => $request->alamat,
                'latar_belakang' => $request->latar,
                'jaringan' => $request->jaringan,
                'pas_foto' => $filenameSimpan,
            ]);

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
            $lengkap = true;
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
                $lengkap = false;
            };
            if($emails == NULL){
                $lengkap = false;
            };
            if($tgl_lahir == NULL){
                $lengkap = false;
            };
            if($no_telp == NULL){
                $lengkap = false;
            };
            if($alamat == NULL){
                $lengkap = false;
            };
            if($latar == NULL){
                $lengkap = false;
            };
            if($jaringan == NULL){
                $lengkap = false;
            };
            if($ktp == NULL){
                $lengkap = false;
            };
            if($kta == NULL){
                $lengkap = false;
            };
            if($bpjs == NULL){
                $lengkap = false;
            };
            if($cv == NULL){
                $lengkap = false;
            };
            if($rekening == NULL){
                $lengkap = false;
            };
            if($npwp == NULL){
                $lengkap = false;
            };
            if($pernyataan == NULL){
                $lengkap = false;
            };
            if($pas_foto == NULL){
                $lengkap = false;
            };

            if($lengkap == true){
                User::where('id',Auth::user()->id)->update([
                    'kelengkapan' => 'lengkap'
                ]);
            }else{
                User::where('id',Auth::user()->id)->update([
                    'kelengkapan' => NULL
                ]);
            }
        }

        return back()->with('success','Profil Berhasil Diperbarui');
    }

    public function storedocument(Request $request)
    {
        if($request->ktp != NULL){
            $filektp = $request->ktp;
            $filenameWithExt = $filektp->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $filektp->getClientOriginalExtension();
            $filenameSimpanktp = 'ktp'.Auth::user()->email.'_'.time().'.'.$extension;
            $filektp->move('filecaleg/ktp',$filenameSimpanktp);

            User::where('id', Auth::user()->id)->update([
                'ktp' => $filenameSimpanktp
            ]);

            $data = User::where('id', Auth::user()->id)->get();
            $nama = NULL;
            $tgl_lahir = NULL;
            $no_telp = NULL;
            $emails = NULL;
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
            $lengkap = true;
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
                $lengkap = false;
            };
            if($tgl_lahir == NULL){
                $lengkap = false;
            };
            if($no_telp == NULL){
                $lengkap = false;
            };
            if($emails == NULL){
                $lengkap = false;
            };
            if($alamat == NULL){
                $lengkap = false;
            };
            if($latar == NULL){
                $lengkap = false;
            };
            if($jaringan == NULL){
                $lengkap = false;
            };
            if($ktp == NULL){
                $lengkap = false;
            };
            if($kta == NULL){
                $lengkap = false;
            };
            if($bpjs == NULL){
                $lengkap = false;
            };
            if($cv == NULL){
                $lengkap = false;
            };
            if($rekening == NULL){
                $lengkap = false;
            };
            if($npwp == NULL){
                $lengkap = false;
            };
            if($pernyataan == NULL){
                $lengkap = false;
            };
            if($pas_foto == NULL){
                $lengkap = false;
            };

            if($lengkap == true){
                User::where('id',Auth::user()->id)->update([
                    'kelengkapan' => 'lengkap'
                ]);
            }
        }
        if($request->kta != NULL){
            $filekta = $request->kta;
            $filenameWithExt = $filekta->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $filekta->getClientOriginalExtension();
            $filenameSimpankta = 'kta'.Auth::user()->email.'_'.time().'.'.$extension;
            $filekta->move('filecaleg/kta',$filenameSimpankta);

            User::where('id', Auth::user()->id)->update([
                'kta' => $filenameSimpankta
            ]);

            $data = User::where('id', Auth::user()->id)->get();
            $nama = NULL;
            $tgl_lahir = NULL;
            $no_telp = NULL;
            $emails = NULL;
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
            $lengkap = true;
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
                $lengkap = false;
            };
            if($tgl_lahir == NULL){
                $lengkap = false;
            };
            if($emails == NULL){
                $lengkap = false;
            };
            if($no_telp == NULL){
                $lengkap = false;
            };
            if($alamat == NULL){
                $lengkap = false;
            };
            if($latar == NULL){
                $lengkap = false;
            };
            if($jaringan == NULL){
                $lengkap = false;
            };
            if($ktp == NULL){
                $lengkap = false;
            };
            if($kta == NULL){
                $lengkap = false;
            };
            if($bpjs == NULL){
                $lengkap = false;
            };
            if($cv == NULL){
                $lengkap = false;
            };
            if($rekening == NULL){
                $lengkap = false;
            };
            if($npwp == NULL){
                $lengkap = false;
            };
            if($pernyataan == NULL){
                $lengkap = false;
            };
            if($pas_foto == NULL){
                $lengkap = false;
            };

            if($lengkap == true){
                User::where('id',Auth::user()->id)->update([
                    'kelengkapan' => 'lengkap'
                ]);
            }
        }
        if($request->bpjs != NULL){
            $filebpjs = $request->bpjs;
            $filenameWithExt = $filebpjs->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $filebpjs->getClientOriginalExtension();
            $filenameSimpanbpjs = 'bpjs'.Auth::user()->email.'_'.time().'.'.$extension;
            $filebpjs->move('filecaleg/bpjs',$filenameSimpanbpjs);

            User::where('id', Auth::user()->id)->update([
                'bpjs' => $filenameSimpanbpjs
            ]);

            $data = User::where('id', Auth::user()->id)->get();
            $nama = NULL;
            $tgl_lahir = NULL;
            $no_telp = NULL;
            $emails = NULL;
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
            $lengkap = true;
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
                $lengkap = false;
            };
            if($emails == NULL){
                $lengkap = false;
            };
            if($tgl_lahir == NULL){
                $lengkap = false;
            };
            if($no_telp == NULL){
                $lengkap = false;
            };
            if($alamat == NULL){
                $lengkap = false;
            };
            if($latar == NULL){
                $lengkap = false;
            };
            if($jaringan == NULL){
                $lengkap = false;
            };
            if($ktp == NULL){
                $lengkap = false;
            };
            if($kta == NULL){
                $lengkap = false;
            };
            if($bpjs == NULL){
                $lengkap = false;
            };
            if($cv == NULL){
                $lengkap = false;
            };
            if($rekening == NULL){
                $lengkap = false;
            };
            if($npwp == NULL){
                $lengkap = false;
            };
            if($pernyataan == NULL){
                $lengkap = false;
            };
            if($pas_foto == NULL){
                $lengkap = false;
            };

            if($lengkap == true){
                User::where('id',Auth::user()->id)->update([
                    'kelengkapan' => 'lengkap'
                ]);
            }
        }
        if($request->cv != NULL){
            $filecv = $request->cv;
            $filenameWithExt = $filecv->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $filecv->getClientOriginalExtension();
            $filenameSimpancv = 'cv'.Auth::user()->email.'_'.time().'.'.$extension;
            $filecv->move('filecaleg/cv',$filenameSimpancv);

            User::where('id', Auth::user()->id)->update([
                'cv' => $filenameSimpancv
            ]);

            $data = User::where('id', Auth::user()->id)->get();
            $nama = NULL;
            $tgl_lahir = NULL;
            $no_telp = NULL;
            $emails = NULL;
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
            $lengkap = true;
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
                $lengkap = false;
            };
            if($emails == NULL){
                $lengkap = false;
            };
            if($tgl_lahir == NULL){
                $lengkap = false;
            };
            if($no_telp == NULL){
                $lengkap = false;
            };
            if($alamat == NULL){
                $lengkap = false;
            };
            if($latar == NULL){
                $lengkap = false;
            };
            if($jaringan == NULL){
                $lengkap = false;
            };
            if($ktp == NULL){
                $lengkap = false;
            };
            if($kta == NULL){
                $lengkap = false;
            };
            if($bpjs == NULL){
                $lengkap = false;
            };
            if($cv == NULL){
                $lengkap = false;
            };
            if($rekening == NULL){
                $lengkap = false;
            };
            if($npwp == NULL){
                $lengkap = false;
            };
            if($pernyataan == NULL){
                $lengkap = false;
            };
            if($pas_foto == NULL){
                $lengkap = false;
            };

            if($lengkap == true){
                User::where('id',Auth::user()->id)->update([
                    'kelengkapan' => 'lengkap'
                ]);
            }
        }
        if($request->rekening != NULL){
            $filerekening = $request->rekening;
            $filenameWithExt = $filerekening->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $filerekening->getClientOriginalExtension();
            $filenameSimpanrekening = 'rekening'.Auth::user()->email.'_'.time().'.'.$extension;
            $filerekening->move('filecaleg/rekening',$filenameSimpanrekening);

            User::where('id', Auth::user()->id)->update([
                'rekening' => $filenameSimpanrekening
            ]);

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
            $lengkap = true;
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
                $lengkap = false;
            };
            if($emails == NULL){
                $lengkap = false;
            };
            if($tgl_lahir == NULL){
                $lengkap = false;
            };
            if($no_telp == NULL){
                $lengkap = false;
            };
            if($alamat == NULL){
                $lengkap = false;
            };
            if($latar == NULL){
                $lengkap = false;
            };
            if($jaringan == NULL){
                $lengkap = false;
            };
            if($ktp == NULL){
                $lengkap = false;
            };
            if($kta == NULL){
                $lengkap = false;
            };
            if($bpjs == NULL){
                $lengkap = false;
            };
            if($cv == NULL){
                $lengkap = false;
            };
            if($rekening == NULL){
                $lengkap = false;
            };
            if($npwp == NULL){
                $lengkap = false;
            };
            if($pernyataan == NULL){
                $lengkap = false;
            };
            if($pas_foto == NULL){
                $lengkap = false;
            };

            if($lengkap == true){
                User::where('id',Auth::user()->id)->update([
                    'kelengkapan' => 'lengkap'
                ]);
            }
        }
        if($request->npwp != NULL){
            $filenpwp = $request->npwp;
            $filenameWithExt = $filenpwp->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $filenpwp->getClientOriginalExtension();
            $filenameSimpannpwp = 'npwp'.Auth::user()->email.'_'.time().'.'.$extension;
            $filenpwp->move('filecaleg/npwp',$filenameSimpannpwp);

            User::where('id', Auth::user()->id)->update([
                'npwp' => $filenameSimpannpwp
            ]);

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
            $lengkap = true;
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
                $lengkap = false;
            };
            if($emails == NULL){
                $lengkap = false;
            };
            if($tgl_lahir == NULL){
                $lengkap = false;
            };
            if($no_telp == NULL){
                $lengkap = false;
            };
            if($alamat == NULL){
                $lengkap = false;
            };
            if($latar == NULL){
                $lengkap = false;
            };
            if($jaringan == NULL){
                $lengkap = false;
            };
            if($ktp == NULL){
                $lengkap = false;
            };
            if($kta == NULL){
                $lengkap = false;
            };
            if($bpjs == NULL){
                $lengkap = false;
            };
            if($cv == NULL){
                $lengkap = false;
            };
            if($rekening == NULL){
                $lengkap = false;
            };
            if($npwp == NULL){
                $lengkap = false;
            };
            if($pernyataan == NULL){
                $lengkap = false;
            };
            if($pas_foto == NULL){
                $lengkap = false;
            };

            if($lengkap == true){
                User::where('id',Auth::user()->id)->update([
                    'kelengkapan' => 'lengkap'
                ]);
            }
        }
        if($request->pernyataan != NULL){
            $filepernyataan = $request->pernyataan;
            $filenameWithExt = $filepernyataan->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $filepernyataan->getClientOriginalExtension();
            $filenameSimpanpernyataan = 'pernyataan'.Auth::user()->email.'_'.time().'.'.$extension;
            $filepernyataan->move('filecaleg/pernyataan',$filenameSimpanpernyataan);

            User::where('id', Auth::user()->id)->update([
                'pernyataan' => $filenameSimpanpernyataan
            ]);

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
            $lengkap = true;
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
                $lengkap = false;
            };
            if($emails == NULL){
                $lengkap = false;
            };
            if($tgl_lahir == NULL){
                $lengkap = false;
            };
            if($no_telp == NULL){
                $lengkap = false;
            };
            if($alamat == NULL){
                $lengkap = false;
            };
            if($latar == NULL){
                $lengkap = false;
            };
            if($jaringan == NULL){
                $lengkap = false;
            };
            if($ktp == NULL){
                $lengkap = false;
            };
            if($kta == NULL){
                $lengkap = false;
            };
            if($bpjs == NULL){
                $lengkap = false;
            };
            if($cv == NULL){
                $lengkap = false;
            };
            if($rekening == NULL){
                $lengkap = false;
            };
            if($npwp == NULL){
                $lengkap = false;
            };
            if($pernyataan == NULL){
                $lengkap = false;
            };
            if($pas_foto == NULL){
                $lengkap = false;
            };

            if($lengkap == true){
                User::where('id',Auth::user()->id)->update([
                    'kelengkapan' => 'lengkap'
                ]);
            }
        }

        if($request->ktp == NULL || $request->kta == NULL || $request->bpjs == NULL || $request->cv == NULL || $request->rekening == NULL || $request->npwp == NULL || $request->pernyataan){
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
            $lengkap = true;
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
                $lengkap = false;
            };
            if($emails == NULL){
                $lengkap = false;
            };
            if($tgl_lahir == NULL){
                $lengkap = false;
            };
            if($no_telp == NULL){
                $lengkap = false;
            };
            if($alamat == NULL){
                $lengkap = false;
            };
            if($latar == NULL){
                $lengkap = false;
            };
            if($jaringan == NULL){
                $lengkap = false;
            };
            if($ktp == NULL){
                $lengkap = false;
            };
            if($kta == NULL){
                $lengkap = false;
            };
            if($bpjs == NULL){
                $lengkap = false;
            };
            if($cv == NULL){
                $lengkap = false;
            };
            if($rekening == NULL){
                $lengkap = false;
            };
            if($npwp == NULL){
                $lengkap = false;
            };
            if($pernyataan == NULL){
                $lengkap = false;
            };
            if($pas_foto == NULL){
                $lengkap = false;
            };

            if($lengkap == true){
                User::where('id',Auth::user()->id)->update([
                    'kelengkapan' => 'lengkap'
                ]);
            }
        };


        return back()->with('success','Dokumen Berhasil Diperbarui');
    }

    public function destroyDoc(User $user)
    {
        // KTP
        if(request('what') == '92849aeec004d64f3cdd984a81100ee7')
        {
            User::where('id', $user->id)->update(['ktp' => NULL , 'kelengkapan' => NULL]);
            return back()->with('success','KTP Berhasil Dihapus');
        }
        // KTA
        if(request('what') == '44769ad2aea97161f74cca5dd270eee9')
        {
            User::where('id', $user->id)->update(['kta' => NULL , 'kelengkapan' => NULL]);
            return back()->with('success','KTA Berhasil Dihapus');
        }
        // BPJS
        if(request('what') == 'f6bc5ffef23c03eeba5df579eabd3cfe')
        {
            User::where('id', $user->id)->update(['bpjs' => NULL , 'kelengkapan' => NULL]);
            return back()->with('success','BPJS Berhasil Dihapus');
        }
        // CV
        if(request('what') == 'de3ec0aa2234aa1e3ee275bbc715c6c9')
        {
            User::where('id', $user->id)->update(['cv' => NULL , 'kelengkapan' => NULL]);
            return back()->with('success','CV Berhasil Dihapus');
        }
        // REKENING
        if(request('what') == 'ed3743d3a98e9167be3dae7c46e4852a')
        {
            User::where('id', $user->id)->update(['rekening' => NULL , 'kelengkapan' => NULL]);
            return back()->with('success','Rekening Berhasil Dihapus');
        }
        // NPWP
        if(request('what') == '0924820a16d5610515ed2e1c0ca04f61')
        {
            User::where('id', $user->id)->update(['npwp' => NULL , 'kelengkapan' => NULL]);
            return back()->with('success','NPWP Berhasil Dihapus');
        }
        // PERNYATAAN
        if(request('what') == '2c947d68ae198a6b04e64c688c1e625f')
        {
            User::where('id', $user->id)->update(['pernyataan' => NULL , 'kelengkapan' => NULL]);
            return back()->with('success','Pernyataan Berhasil Dihapus');
        }



    }
}
