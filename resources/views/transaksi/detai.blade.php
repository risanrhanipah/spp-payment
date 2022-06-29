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

<body>
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
                                                            <b>SMK WIKRAMA 1 Garut 2020-2021</b><br>
                                                            Jl. Raya Otista, Desa Pasawahan, Kec.Tarogong Kaler <br>
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
                                                <td colspan="3" style="background-color: lightgray"><center><b>DATA PESERTA DIDIK</b></center></td>
                                            </tr>
                                            <tr>
                                                <td width="30%"><b>NISN</b></td>
                                                <td width="3%">:</td>
                                                <td>{{$data->nisn}}</td>
                                            </tr>
                                            <tr>
                                                <td width="30%"><b>NIS</b></td>
                                                <td width="3%">:</td>
                                                <td>{{$data->nis}}</td>
                                            </tr>
                                            <tr>
                                                <td width="30%"><b>NAMA</b></td>
                                                <td width="3%">:</td>
                                                <td>{{$data->nama}}</td>
                                            </tr>
                                            <tr>
                                                <td width="30%"><b>KELAS</b></td>
                                                <td width="3%">:</td>
                                                <td>{{$data->nama_kelas}}</td>
                                            </tr>
                                            <tr>
                                                <td width="30%"><b>EMAIL</b></td>
                                                <td width="3%">:</td>
                                                <td>rrisa@gmail.com</td>
                                            </tr>
                                            <tr>
                                                <td width="30%"><b>ALAMAT</b></td>
                                                <td width="3%">:</td>
                                                <td>{{$data->alamat}}</td>
                                            </tr>
                                            <tr>
                                                <td width="30%"><b>NO. HP</b></td>
                                                <td width="3%">:</td>
                                                <td>{{$data->no_telp}}</td>
                                            </tr>
                                        </table>
                                        <table width="37%" border="0">
                                            <tr>
                                                <td colspan="3" style="background-color: lightgray"><center><b>INFORMASI</b></center></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"><p><b>TELAH MEMBAYAR SPP BULAN {{$data->bln_bayar . ' - '. $data->thn_bayar.' '}} PADA TANGGAL {{$data->tgl_bayar}}</b></p></td>
                                            </tr>
                                            <tr>
                                                
                                            </tr>
                                            <tr>
                                            </tr>
                                            <tr>
                                            </tr>
                                            <tr>
                                                
                                            </tr>
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
                                                <p><b>SMK Wikrama 1 Garut.</b></p>
                                                <small><span class="font-weight-semibold text-dark">Phone:</span> 08821912812</small>
                                                <br>
                                                <small>wikramagarut@garut.com</small>
                                                <br>
                                                <a href="{{url('transaksi')}}" class="btn btn-danger">Back</a>
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
