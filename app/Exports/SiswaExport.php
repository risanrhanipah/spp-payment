<?php

namespace App\Exports;

use App\Models\PembayaranView;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return PembayaranView::all();
    }

    public function headings(): array
    {
        return [
            "id",
            "id_petugas",
            "nisn",
            "tgl_bayar",
            "bulan_dibayar",
            "tahun_dibayar",
            "Id_Spp",
            "j_bayar",
            "created_at",
            "updated_at",
            "nama_petugas",
            "email_petugas",
            "nis",
            "nama_siswa",
            "id_rombel",
            "nama_rombel",
            "kompetensi_keahlian",
            "alamat",
            "no_telp",
            "tahun",
            "nominal",
         ];
    }
}
