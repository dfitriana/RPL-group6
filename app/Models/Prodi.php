<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'prodis';
    // protected $primaryKey = 'kode';
    protected $fillable = [
        'kode',
        'nama_prodi',
        'jenjang',
        'konsentrasi',
        'strjjg',
        'no_sk',
        'akreditasi',
        'tgl_sk'
    ];
}
