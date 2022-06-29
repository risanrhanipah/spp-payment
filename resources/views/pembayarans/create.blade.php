@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-lg-5 margin-tb">
        <div class="pull-left">
            <font face="Brush Script MT"><h1>Add Pembayaran</h1></font>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('pembayarans.index') }}"> Back</a>
        </div>
    </div>
    <br>
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

<form action="{{ route('pembayarans.store') }}" method="POST">

    @csrf
     <div class="row">
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Nisn :</strong>
                <select name="nisn" id="nisn" class="form-control" placeholder="Nisn" onchange="getdata()" required>
                <option value="">Pilih Siswa</option>
                @foreach($siswas as $a)
                <option value="{{$a->nisn}}">{{$a->nama}}</option>
                @endforeach
                </select>
            </div>
        </div>
        
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Harga - Bulan/Tahun Terakhir Bayar :</strong>
                <input type="text" readonly id="akhir" class="form-control" placeholder="" required>
            </div>
        </div>
        <!-- <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Jumlah Bulan :</strong>
                <input type="text" name="bulan_dibayar"class="form-control" placeholder="Jumlah Bulan" autocomplete="off" required>
            </div>
        </div> -->
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Jumlah Bayar :</strong>
                <input type="text" name="j_bayar" id="uang" class="form-control" placeholder="Jumlah Bayar" autocomplete="off" required>
            </div>
        </div>
            <div class="col-xs-5 col-sm-5 col-md-5 text-center">
             
            <button type="submit" class="btn btn-danger">Submit</button>
        </div>
    </div>
</form>
</div>
    <script>
        function getdata(){
            var nisn = $("#nisn").val();
            // alert(nisn);

            $.ajax({
                url: "{{url('get-data/')}}" + "/" + nisn,
                type: "get", 
                success: function(data){
                    console.log(data);

                    $("#akhir").val("Rp. " + data['harga'] + " - " + data['akhir']['bulan_dibayar'] + '/' + data['akhir']['tahun_dibayar']);
                }
            });
        }
    </script>
    <script>
    $('#uang').keyup(function(){
        var sanitized = $(this).val().replace(/[^0-9]/g, '');
        // Update value
        $(this).val(sanitized);
      })
    </script>
@endsection
