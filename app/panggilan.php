<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class panggilan extends Model
{
    protected $fillable = [
        'nama', 'tgl', 'jam', 'paket', 'staff'
    ];
}
