@extends('layouts.ape')

@section('content')

    <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <font face="Brush Script MT"><h1>Edit Pembayaran</h1></font>
            </div>
            <div class="pull-right">
                <a class="btn btn-warning" href="{{ route('pembayarans.index') }}"> Back</a>
            </div>
        </div>
    </div>
<div class="container">

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pembayarans.update',$pembayaran->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Petugas:</strong>
                    <input type="text" name="id_petugas" value="{{ $pembayaran->id_petugas }}" class="form-control" placeholder="Id Petugas">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nisn:</strong>
                    <input type="text" name="nisn" value="{{ $pembayaran->nisn }}" class="form-control" placeholder="Nisn">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Bayar:</strong>
                    <input type="date" name="tgl_bayar" value="{{ $pembayaran->tgl_bayar }}" class="form-control" placeholder="Tanggal Bayar">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bulan Bayar:</strong>
                    <input type="text" name="bulan_dibayar" value="{{ $pembayaran->bulan_dibayar }}" class="form-control" placeholder="Bulan Bayar">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahun Bayar:</strong>
                    <input type="text" name="tahun_dibayar" value="{{ $pembayaran->tahun_dibayar }}" class="form-control" placeholder="Tahun Bayar">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Spp:</strong>
                    <input type="text" name="id_spp" value="{{ $pembayaran->id_spp }}" class="form-control" placeholder="Id Spp">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Bayar:</strong>
                    <input type="text" name="j_bayar" value="{{ $pembayaran->j_bayar }}" class="form-control" placeholder="Jumlah Bayar">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection