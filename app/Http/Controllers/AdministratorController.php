<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\karyawan;
use App\barang;
use PDF;
use App\bayar;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Capster;
use App\administrator;

class AdministratorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:administrator');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('administrator');
    }
    public function showUser()
    {
        $user = User::all();
        return view('administrator.user', compact('user'));
    }
    
    public function showKaryawan()
    {
        $karyawan = karyawan::all();
        return view('administrator.karyawan', compact('karyawan'));
    }

    public function detailKaryawan($id)
    {
        $karyawan = karyawan::find($id);
        return view('administrator.detailkaryawan', compact('karyawan'));
    }

    public function editKaryawan($id)
    {
        $karyawan = karyawan::find($id);
        return view('administrator.editkaryawan', compact('karyawan'));
    }

    public function updateKaryawan(Request $request, $id)
    {
        $karyawan = karyawan::where('id',$request->id)->update([
            'foto' => $request->foto,
            'nama' => $request->nama,
            'tgl_masuk' => $request->tgl_masuk,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'gaji' => $request->gaji
        ]);

        return redirect('administrator.detailkaryawan');
    }

    public function newKaryawan()
    {
        $karyawan = karyawan::all();
        return view('administrator.newkaryawan', compact('karyawan'));
    }
    public function postKaryawan(Request $request)
    {
        $karyawan = new karyawan();

        $file = $request->file('foto');
        $fileName = $file->getClientOriginalName();
        $request->file('foto')->move("storage/images/", $fileName);
        $karyawan->foto = $fileName;

        $karyawan->nama = $request['nama'];
        $karyawan->tgl_masuk = $request['tgl_masuk'];
        $karyawan->umur = $request['umur'];
        $karyawan->alamat = $request['alamat'];
        $karyawan->jabatan = $request['jabatan'];
        $karyawan->gaji = $request['gaji'];
        $karyawan->save();
        return redirect('administrator/karyawan');
    }

    public function printPdf($id)
    {
      $karyawan = karyawan::find($id);
      $pdf = PDF::loadView('administrator.print', compact('karyawan'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    public function showBarang()
    {
        $barang = barang::all();
        return view('administrator.barang', compact('barang'));
    }

    public function showTransaksi()
    {
        $bayar = bayar::all();
        return view('administrator.transaksi', compact('bayar'));
    }

    public function showCapster()
    {
        $capster = Capster::all();
        return view('administrator.capster', compact('capster'));
    }

    public function newCapster()
    {
        $capster = Capster::all();
        return view('administrator.newcapster', compact('capster'));
    }

    public function postCapster(Request $request)
    {
        $capster = new Capster();
        $capster->id = IdGenerator::generate(['table' => 'capsters', 'length' => 8, 'prefix' =>'CAPS-']);
        
        $file = $request->file('foto');
        $fileName = $file->getClientOriginalName();
        $request->file('foto')->move("storage/images/", $fileName);
        $capster->foto = $fileName;

        $capster->nama = $request['nama'];
        $capster->umur = $request['umur'];
        $capster->alamat = $request['alamat'];
        $capster->save();
        return redirect('administrator/capster');
    }
}