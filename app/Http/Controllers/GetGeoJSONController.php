<?php

namespace App\Http\Controllers;

use App\Models\Dapil;
use Illuminate\Http\Request;

class GetGeoJSONController extends Controller
{
    public function getDapil(Dapil $dapil)
    {
        $data = Dapil::where('id' ,$dapil->id)->get();
        foreach($data as $d){
            $result[] = $d;
        }
        $hasil = json_encode($result);

        return $hasil;;
    }
}
