<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Detail Siswa</title>

    <!-- Favicon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href={{asset("assets/images/logo/favicon.png")}}>
</head>

<body onload="window.print()">
    <div class="app">
        <div class="layout">
            <div class="page-container" style="padding-left: 60px">
                <div class="main-content"> <br>
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <div id="invoice" class="p-h-30">
                                    <div class="m-t-15 lh-2">
                                        <div class="inline-block">
                                            <table style="width: 94%"; border="0">
                                                <tbody>
                                                    <tr>
                                                        <td rowspan="4" width="30%">
                                                            <center><div><img class="img-fluid" src="{{asset('assets/images/logo/logo.png')}}" alt=""></div></center>
                                                        </td>
                                                        <td>
                                                            <b>SMK WIKRAMA 1 GARUT</b>
                                                            <br>
                                                            <b>Tahun Pelajaran 2020-2021</b>
                                                            <br>
                                                            <small>Jln. Otto Iskandardinata Kp. Tanjung RT 003 RW 013 Desa. Pasawahan Kec. Tarogong Kaler</small>
                                                            <br>
                                                            <small>Kab. Garut Jawa Barat 44151</small>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="row m-t-20 lh-2">
                                        <table width="55%" border="0" style="margin-left:3%;margin-right:2%;float:left">
                                            <tr>
                                                <td colspan="3" style="background-color: lavender"><center><b>DATA PESERTA DIDIK</b></center></td>
                                            </tr>
                                            <tr>
                                                <td width="30%"><b>NISN</b></td>
                                                <td width="3%">:</td>
                                                <td>{{$pembayaran->nisn}}</td>
                                            </tr>
                                            <tr>
                                                <td width="30%"><b>NIS</b></td>
                                                <td width="3%">:</td>
                                                <td>{{$pembayaran->nis}}</td>
                                            </tr>
                                            <tr>
                                                <td width="30%"><b>Nama</b></td>
                                                <td width="3%">:</td>
                                                <td>{{$pembayaran->nama}}</td>
                                            </tr>
                                            <tr>
                                            <tr>
                                                <td width="30%"><b>Id Spp</b></td>
                                                <td width="3%">:</td>
                                                <td>{{$pembayaran->tahun}}</td>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <td width="30%"><b>Rombel</b></td>
                                                <td width="3%">:</td>
                                                <td>{{$pembayaran->nama_rombel}}</td>
                                            </tr>
                                            <tr>
                                                <td width="30%"><b>Alamat</b></td>
                                                <td width="3%">:</td>
                                                <td>{{$pembayaran->alamat}}</td>
                                            </tr>
                                            <tr>
                                                <td width="30%"><b>No Telpon</b></td>
                                                <td width="3%">:</td>
                                                <td>{{$pembayaran->no_telp}}</td>
                                            </tr>
                                        </table>
                                        <table width="37%" border="0">
                
                                            <tr>
                                                <td colspan="3" style="background-color: lavender"><center><b>BUKTI PEMBAYARAN SPP</b></center></td>
                                            </tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr>
                                                <td colspan="3"><p><b>Telah Membayar SPP Bulan {{$pembayaran->bulan_dibayar . ' '. $pembayaran->tahun_dibayar.' '}} <br> Pada : {{$pembayaran->tgl_bayar}}</b></p></td>
                                            </tr>
                                            <tr>
                                                <br /><td width="65%"><b>Jumlah Pembayaran </b></td>
                                                <td width="3%">:</td>
                                                <td><b>Rp. {{$pembayaran->j_bayar}}</td>
                                            </tr>
                                            <tr>
                                                <td width="30%"><b>Nama Petugas</b></td>
                                                <td width="3%">:</td>
                                                <td>{{$pembayaran->name}}</td>
                                            </tr>
                                            <table width="67%" border="0">
                    
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                            <tr></tr>
                                        </table>
                                    </div>
                                    <hr>
                                    <div class="m-t-20">
                                        <div class="row m-v-20">
                                            <div class="col-sm-6">
                                                <img class="img-fluid text-opacity m-t-5" width="100" src="assets/images/logo/logo.png" alt="">
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                <small><span class="font-weight-semibold text-dark">Telp :</span> 0262-2247029</small>
                                                <br>
                                                <small>smkwikrama1garut@gmail.com</small>
                                                <br>
                                                <small>http://www.smkwikrama1garut.sch.id</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer">
                    <div class="footer-content">
                        
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

            <!-- Search End-->

            <!-- View END -->
        </div>
    </div>


</body>

</html>
