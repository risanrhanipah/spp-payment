@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <font face="Brush Script MT"><h1>Edit Petugas</h1></font>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('petugas.index') }}"> Back</a>
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

    <form action="{{ route('petugas.update',$a->id) }}" method="POST">
    @csrf
    @method('PUT')

         <div class="row">
            <br><div class="col-xs-5 col-sm-5 col-md-5"></br>
                <div class="form-group">
                    <strong>Username :</strong>
                    <input type="text" name="username" value="{{ $a->username }}" class="form-control" placeholder="Username" autocomplete="off" required>
                </div>
            </div>
            <br><div class="col-xs-5 col-sm-5 col-md-5"></br>
                <div class="form-group">
                    <strong>Password :</strong>
                    <input type="password" name="password" value="{{ $a->password }}" class="form-control" placeholder="Password" autocomplete="off" required>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Nama Petugas :</strong>
                    <input type="text" name="nama_petugas" value="{{ $a->nama_petugas }}" class="form-control" placeholder="Nama Petugas" autocomplete="off" required>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 text-center">

              <button type="submit" class="btn btn-danger">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection