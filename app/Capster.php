<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capster extends Model
{
    protected $fillable = [
        'foto', 'nama', 'umur', 'alamat'
    ];
}
