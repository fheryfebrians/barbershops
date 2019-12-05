<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
       'dewasa', 'anak', 'paket', 'model', 'capster', 'tgl_booking', 'harga'
    ];

   public function user()
   {
       return $this->belongsTo(User::class);
   }

   public function bayars()
   {
       return $this->hasMany(bayar::class);
   }
   
}
