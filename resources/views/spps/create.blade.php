@extends('layouts.app')

@section('content')

<div class="container">
    <div class="col-lg-5 margin-tb">
        <div class="pull-left">
            <font face="Brush Script MT"><h1>Add Spp</h1></font>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('spps.index') }}"> Back</a>
        </div>
    </div>
</div>
<br> 
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

<form action="{{ route('spps.store') }}" method="POST">
    @csrf
     <div class="row">
     <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Tahun Masuk :</strong>
                <select name="awal" id="" class="form-control" placeholder="Tahun" required>
                <option value="" selected >Pilih Tahun</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div>
        </div>
        <!-- <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Tahun Keluar :</strong>
                <select name="akhir" id="" class="form-control" placeholder="Id Spp">
                <option value="" selected >Pilih Tahun</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                </select>
            </div>
        </div> -->
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Nominal :</strong>
                <input type="number" id="uang" name="nominal" class="form-control" placeholder="Nominal" autocomplete="off" required>
            </div>
        </div>
                <div class="col-xs-5 col-sm-5 col-md-5 text-center">

                <button type="submit" class="btn btn-danger">Submit</button>
        </div>
    </div>
</form>
</div>

<script>
$('#uang').keyup(function(){
        var sanitized = $(this).val().replace(/[^0-9]/g, '');
        // Update value
        $(this).val(sanitized);
      })
</script>
@endsection