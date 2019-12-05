<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $fillable = [
        'foto', 'nama', 'tgl_masuk', 'umur', 'alamat', 'jabatan', 'gaji'
    ];
}
