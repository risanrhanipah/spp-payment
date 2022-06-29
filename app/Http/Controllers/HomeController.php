<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembayaranView;
use App\Models\SiswaView;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { //ini namanya function
        if (Auth::user()->role == 'siswa') { //klo roll = siswa, jalanin fungsi yang ada dlm kurawal
            return redirect('historys'); //pindah ke url historys
        }elseif (Auth::user()->role == 'petugas') {
            return redirect('pembayarans'); //pindah ke url pembayarans
        }elseif (Auth::user()->role == 'admin') {
            $role = Auth::user()->role; // ambil rol dari user yang login masukan ke variabel role
            return view('home', compact('role'));//tampilkan view home sambil bawa variabel role
        }
    }

    public function history()
    {
        // $hstry = Auth::user()->password;
        $nama = Auth::user()->name; //ambil nama dari user yang login masukan ke variabel nama 

        $siswa = SiswaView::where('nama', $nama)->first(); //ambil data dari SiswaView yang namanya = akun yang dia login

        $a = PembayaranView::where('nama', $nama)->get(); //ambil dari pembayaranview yang namanya = $nama
        // dd($nama);

        return view('historys.index', compact('a', 'siswa')); // tampilkan view historys.index sambil bawa variabel a
    }

    public function historyJ()
    {
        $a = PembayaranView::all();

        return view('historys.index2', compact('a'));
    }
}
