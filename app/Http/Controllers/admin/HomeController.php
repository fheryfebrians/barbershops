<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Capster;
use App\Booking;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Image;
use PDF;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\barang;
use App\bayar;
use App\panggilan;
use Auth;

class HomeController extends Controller
{
    public function showHome()
    {
        $user = User::all();
        return view('admin.home', compact('user'));
    }
    // public function showCapster()
    // {
    //     $capster = Capster::all();
    //     return view('admin.capster', compact('capster'));
    // }

    // public function newCapster()
    // {
    //     $capster = Capster::all();
    //     return view('admin.newcapster',compact('capster'));
    // }
    
    // public function postCapster(Request $request)
    // {
    //     $capster = new Capster();
    //     $capster->id = IdGenerator::generate(['table' => 'capsters', 'length' => 8, 'prefix' =>'CAPS-']);
        
    //     $file = $request->file('foto');
    //     $fileName = $file->getClientOriginalName();
    //     $request->file('foto')->move("storage/images/", $fileName);
    //     $capster->foto = $fileName;

    //     $capster->nama = $request['nama'];
    //     $capster->umur = $request['umur'];
    //     $capster->alamat = $request['alamat'];
    //     $capster->save();
    //     return redirect()->back();
    // }

    public function showUser()
    {
        $user = User::all();
        return view('admin.user', compact('user'));
    }

    public function newuser()
    {
        $user = User::all();
        return view('admin.newuser', compact('user'));
    }

    public function postUser(Request $request)
    {
        $user = new User();
        $user->name = $request['name'];
        $user->password = bcrypt($request['password']);
        $user->email = $request['email'];
        $user->nomor = $request['nomor'];
        $user->alamat = $request['alamat'];
        $user->save();
        return redirect('admin/user');
    }

    public function showBook()
    {
        $booking = Booking::all();
        $user = user::all();
        return view('admin.book', compact('booking', 'user'));
    }

    public function showBarang()
    {
        $barang = barang::all();
        return view('admin.barang', compact('barang'));
    }
    
    public function newBarang()
    {
        return view('admin.newbarang');
    }

    public function postBarang(Request $request)
    {
        $barang = new barang();
        
        $file = $request->file('foto');
        $fileName = $file->getClientOriginalName();
        $request->file('foto')->move("storage/images/", $fileName);
        $barang->foto = $fileName;

        $barang->nama = $request['nama'];
        $barang->harga = $request['harga'];
        $barang->save();
        return redirect('admin/barang');
    }

    public function showPanggilan()
    {
        $panggilan = panggilan::all();
        return view('admin.panggilan', compact('panggilan'));
    }

    public function newPanggilan()
    {
        return view('admin.newpanggilan');
    }

    public function postPanggilan(Request $request)
    {
        $panggilan = new panggilan();
        $panggilan->nama = $request['name'];
        $panggilan->tgl = $request['tgl'];
        $panggilan->jam = $request['jam'];
        $panggilan->paket = $request['paket'];
        $panggilan->staff = $request['staff'];
        $panggilan->save();
        return redirect('admin/panggilan');
    }
    
    public function showBayar($id)
    {
       
        $booking = Booking::find($id);
        return view('admin.bayar', compact('booking'));
    }

    public function postBayar(Request $request)
    {
        $booking = Booking::find(1);
        $bayar = new Bayar();
        // $bayar->harga = $request['harga'];
        $bayar->tgl_transaksi = $request['tgl_transaksi'];
        $booking->bayars()->save($bayar);
        return redirect('admin/book');
    }

    public function newGaleri()
    {
        return view('admin.galeri');
    }

    public function postGaleri(Request $request)
    {
        $galeri = new galeri();
        $file = $request->file('foto');
        $fileName = $file->getClientOriginalName();
        $request->file('foto')->move("storage/images/", $fileName);
        $galeri->foto = $fileName;
        $galeri->save();
        return redirect()->back();
    }


    //pdf pembayaran
    public function printPdf($id)
    {
      $bayar = bayar::find($id);
      $pdf = PDF::loadView('admin.print', compact('bayar'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    
}