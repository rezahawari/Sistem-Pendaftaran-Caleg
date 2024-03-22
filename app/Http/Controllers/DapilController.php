<?php

namespace App\Http\Controllers;

use App\Models\Dapil;
use Illuminate\Http\Request;

class DapilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

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
        if ($request->status == 'on') {
            Dapil::create([
                'nama_dapil' => $request->nama,
                'wilayah' => $request->wilayah,
                'pemilih' => '0',
                'kuota' => $request->kuota,
                'status' => 'active'
            ]);
        }else{
            Dapil::create([
                'nama_dapil' => $request->nama,
                'wilayah' => $request->wilayah,
                'pemilih' => '0',
                'kuota' => $request->kuota,
                'status' => 'inactive'
            ]);

        }

        return back()->with('success', 'Dapil berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dapil  $dapil
     * @return \Illuminate\Http\Response
     */
    public function show(Dapil $dapil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dapil  $dapil
     * @return \Illuminate\Http\Response
     */
    public function edit(Dapil $dapil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dapil  $dapil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dapil $dapil)
    {
        if ($request->status == 'on') {
            Dapil::where('id',$dapil->id)->update([
                'wilayah' => $request->wilayah,
                'pemilih' => '0',
                'kuota' => $request->kuota,
                'status' => 'active'
            ]);

        }else{
            Dapil::where('id',$dapil->id)->update([
                'wilayah' => $request->wilayah,
                'pemilih' => '0',
                'kuota' => $request->kuota,
                'status' => 'inactive'
            ]);
        }

        return redirect('/admin/dapil')->with('success', 'Dapil berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dapil  $dapil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dapil $dapil)
    {
        //
    }
}
