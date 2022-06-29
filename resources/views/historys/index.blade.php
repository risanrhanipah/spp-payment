@extends('layouts.appp')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ __('Keterangan') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row m-t-50 lh-10">
                        <table width="150%" border="0" style="margin-left:10%;margin-right:5%;float:left">
                            <tr>
                                <td colspan="10" style="background-color: transparent"><center><b>DATA PEMBAYARAN PESERTA DIDIK</b></center></td>
                            </tr>
                                <br><tr>
                                    <td width="30%"><b>NISN</b></td>
                                    <td width="3%">:</td>
                                    <td>{{$siswa->nisn}}</td><br/>
                                </tr>
                                <tr>
                                    <td width="30%"><b>NIS</b></td>
                                    <td width="3%">:</td>
                                    <td>{{$siswa->nis}}</td>
                                </tr>
                                <tr>
                                    <td width="30%"><b>Nama</b></td>
                                    <td width="3%">:</td>
                                    <td>{{$siswa->nama}}</td>
                                </tr>
                            <div class="col-lg-6">
                                <tr>
                                    <td width="30%"><b>Rombel</b></td>
                                    <td width="3%">:</td>
                                    <td>{{$siswa->nama_rombel}}</td>
                                </tr>
                                <tr>
                                    <td width="30%"><b>Nominal SPP</b></td>
                                    <td width="3%">:</td>
                                    <td>{{$siswa->nominal}}</td>
                                </tr></br>
                            </table>
                        </div>
                    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @elseif ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif
    <br>

<div class="container">
<table id="table_id" class="table table-bordered">
        <thead>
            <tr>
                    <th>Nama</th>
                    <th>Nisn</th>
                    <th>Tanggal Bayar</th>
                    <th>Bulan Bayar</th>
                    <th>Tahun Bayar</th>
                    <th>Id Spp</th>
                    <th>Jumlah Bayar</th> 
            </tr>
        </thead>
    <tbody>
    <?php $i = 0; ?>
            @foreach ($a as $history)
                <tr>
                    <td>{{ $history->nama }}</td>
                    <td>{{ $history->nisn }}</td>
                    <td>{{ $history->tgl_bayar }}</td>
                    <td>{{ $history->bulan_dibayar }}</td>
                    <td>{{ $history->tahun_dibayar }}</td>
                    <td>{{ $history->tahun }}</td>
                    <td> Rp. {{ $history->j_bayar }}</td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            </div>
        </div>
    </div>


    {{-- {!! $pembayarans->links() !!} --}}
</div>

<script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
    </script>

@endsection