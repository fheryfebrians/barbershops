<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bayar extends Model
{
    protected $fillable = [
        'tgl_transaksi'
    ];

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
