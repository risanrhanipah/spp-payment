<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\PembayaranView;
use App\Models\Spp;
use App\Models\Siswa;
use App\Exports\UserExport;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayarans = PembayaranView::all();

        return view('pembayarans.index', compact('pembayarans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswas = Siswa::all();
        $spp = Spp::all();

        return view('pembayarans.create', compact('siswas', 'spp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $siswa = Siswa::where('nisn', $request->nisn)->first();

        // for ($i=0; $request < $request->jumlah_bulan ; $i++) { 

        //     $spp = Spp::where('id', $siswa->id_spp)->first();

        //     $transaksi = PembayaranView::where('nisn', $request->nisn)->get();
    
        //     $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    
    
        //     if(sizeof($transaksi) == 0){
        //         $urut = 6;
        //         $tahun = substr($spp->tahun, 0, 4);
        //     }else{
        //         $a = array_key_last(end($transaksi));
    
        //         $akhir = $transaksi[$a];
    
        //         $v = array_search($akhir->bulan_dibayar, $bulan);
    
        //             if($v == 11){
        //                 $urut = 0;
        //                 $tahun = $akhir->tahun_dibayar + 1;
        //             }else{
        //                 $urut = $v + 1;
        //                 $tahun = $akhir->tahun_dibayar;
        //             }
        //      }
     
        // }

        $spp = Spp::where('id', $siswa->id_spp)->first();

        $transaksi = PembayaranView::where('nisn', $request->nisn)->get();

        $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        if(sizeof($transaksi) == 0){
            $urut = 6;
            $tahun = substr($spp->tahun, 0, 4);
        }else{
            $a = array_key_last(end($transaksi));

            $akhir = $transaksi[$a];

            $v = array_search($akhir->bulan_dibayar, $bulan);

                if($v == 11){
                    $urut = 0;
                    $tahun = $akhir->tahun_dibayar + 1;
                }else{
                    $urut = $v + 1;
                    $tahun = $akhir->tahun_dibayar;
                }
            }


        // if ($request->j_bayar > $spp->nominal){
        //     return redirect('pembayarans');
        // }

        if ($request->j_bayar < $spp->nominal) {
            return redirect('pembayarans')->with('error','Pembayaran gagal dilakukan, uang yang anda masukkan kurang!');
        }
        
        //$kembalian = $request->j_bayar - $spp ->nominal;
        //$jumlah = $request->j_bayar * $spp->nominal;
        
        // PembayaranView::create([
        //     'id_petugas' => Auth::user()->id,
        //     'nisn' => $request->nisn,
        //     'tgl_bayar' => now(),
        //     'bulan_dibayar' => $bulan[$urut],
        //     'tahun_dibayar' => '2018',
        //     'id_spp' => $spp->id,
        //     'j_bayar' => $spp->nominal,
        // ]);

        // return redirect()->route('index.pembayarans')->with('error', 'kembalian anda'.$kembalian);

        $pembayaran = Pembayaran::create([
            'id_petugas' => Auth::user()->id,
            'nisn' => $request->nisn,
            'tgl_bayar' => Carbon::now(),
            'bulan_dibayar' => $bulan[$urut],
            'tahun_dibayar' => $tahun,
            'id_spp' => $siswa->id_spp,
            'j_bayar' => $spp->nominal,
        ]);

        if($pembayaran){
            return redirect()->route('pembayarans.index')->with('success','Pembayaran berhasil dilakukan!');
        }else{
            return redirect()->back()->with('error','Pembayaran gagal dilakukan!');
        }
            return redirect()->route('pembayarans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(PembayaranView $pembayaran)
    {
        // dd($pembayaran);
    return view('pembayarans.show', compact('pembayaran'));
    }

    public function export()
	{
		return Excel::download(new SiswaExport, 'siswa.xlsx');
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayaran $pembayaran)
    {
        return view('pembayarans.edit', compact('pembayaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        $request->validate([
            'id_petugas' => 'required',
            'nisn' => 'required',
            'tgl_bayar' => 'required',
            'bulan_dibayar' => 'required',
            'tahun_dibayar' => 'required',
            'id_spp' => 'required',
            'j_bayar' => 'required',
        ]);

        $pembayaran->update($request->all());

        return redirect()->route('pembayarans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();
        
        return redirect()->route('pembayarans.index');
    }

    public function getdata($nisn)
    {
        $getdata = Siswa::where('nisn', $nisn)->first(); //ambil data siswa yang nisn nya = nisn

        $spp = Spp::where('id', $getdata->id_spp)->first(); //ambil data spp yang id nya = id_spp

        $transaksi = Pembayaran::where('nisn', $nisn)->get(); //ambil data dari pembayaran = nisn

        $ind = array_key_last(end($transaksi)); //ambil index dari data terakhir
        
        if (sizeof($transaksi) == 0) { 
            $data = [
                'harga' => $spp->nominal, 
                'akhir' => [
                    'bulan_dibayar' => 'belum pernah',
                    'tahun_dibayar' => 'bayar spp',
                ]
            ];
        }else{
            $data = [
                'harga' => $spp->nominal,
                'akhir' => $transaksi[$ind],
            ];
        }

        return response()->json($data);
    } 
}
