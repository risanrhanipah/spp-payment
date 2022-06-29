@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <font face="Brush Script MT"><h1>Edit Rombel</h1></font>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('rombels.index') }}"> Back</a>
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

    <form action="{{ route('rombels.update',$rombel->id) }}" method="POST">
    @csrf
    @method('PUT')

         <div class="row">
            <br><div class="col-xs-5 col-sm-5 col-md-5"></br>
                <div class="form-group">
                    <strong>Nama Rombel :</strong>
                    <input type="text" name="nama_rombel" value="{{ $rombel->nama_rombel }}" class="form-control" placeholder="Nama Rombel" autocomplete="off" required>
                </div>
            </div>
            <br><div class="col-xs-5 col-sm-5 col-md-5"></br>
                <div class="form-group">
                    <strong>Kompetensi Keahlian :</strong>
                    <input type="text" name="kompetensi_keahlian" value="{{ $rombel->kompetensi_keahlian }}" class="form-control" placeholder="Kompetensi Keahlian" autocomplete="off" required>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 text-center">

              <button type="submit" class="btn btn-danger">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection