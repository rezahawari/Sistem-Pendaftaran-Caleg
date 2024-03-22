<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dapil extends Model
{
    use HasFactory;
    protected $fillable = [
       'nama_dapil',
       'wilayah',
       'pemilih',
       'kuota',
       'status'
    ];
}
