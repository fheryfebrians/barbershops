<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capster;
use App\karyawan;
use Alert;
use App\galeri;

class BarberController extends Controller
{
    public function menuUtama()
    {
        return view('welcome');
    }
    public function showAbout()
    {
        return view('user.about');
    }
    public function showStaff()
    {
        $capster = Capster::all();
        $karyawan = karyawan::all();
        return view('user.staff', compact('capster', 'karyawan'));
    }
    public function showContact()
    {
        return view('user.contact');
    }
    public function showGaleri()
    {
        $galeri = galeri::all();
        return view('user.galeri', compact('galeri'));
    }
    public function showService()
    {
        return view('user.service');
    }

}
