<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Booking;
use App\User;
use Auth;
use Alert;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showBook()
    {
        $booking = Booking::all();
        return view('user.booking', compact('booking'));
    }

    public function postBook(Request $request)
    {
        $user = User::find(1);
        $booking = new Booking();
        // $booking->antrian = IdGenerator::generate(['table' => 'bookings', 'length' => 8, 'prefix' =>'BOOK-']);
        $booking->paket = $request['paket'];
        if($booking->paket == "cukuranak"){
            $booking->harga = "30.000";
        }
        if($booking->paket ==  "paket50k"){
            $booking->harga = "50.000";
        }
        if($booking->paket == "paket75k"){
            $booking->harga = "75.000";
        }
        if($booking->paket == "paket85k"){
            $booking->harga = "85.000"
        }
        if($booking->paket == "paket80k"){
            $booking->harga = "80.000";
        }
        if($booking->paket == "paket95k"){
            $booking->harga = "95.000";
        }
        if($booking->paket == "paket115k"){
            $booking->harga = "115.000";
        }
        if($booking->paket == "paket285k"){
            $booking->harga = "285.000";
        }
        if($booking->paket == "paket125k"){
            $booking->harga = "125.000";
        }
        if($booking->paket == "paket300k"){
            $booking->harga = "300.000";
        }
        if($booking->paket == "paket125"){
            $booking->harga = "125.000";
        }



        $booking->model = $request['model'];
        $booking->capster = $request['capster'];
        $booking->tgl_booking = $request['tgl_booking'];
        Auth::user()->bookings()->save($booking);      
        Alert::success("Tanggal Booking : $booking->tgl_booking ", "No. Antrian : BOOK-$booking->id ")->persistent("Close this");
        return redirect()->back();
    }
}
