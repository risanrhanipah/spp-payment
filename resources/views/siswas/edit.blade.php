@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-5 margin-tb">
            <div class="pull-left">
                <font face="Brush Script MT"><h1>Edit Siswa</h1></font>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('siswas.index') }}">Back</a>
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

    <form action="{{ route('siswas.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Nisn :</strong>
                    <input type="text" name="nisn" value="{{ $siswa->nisn }}" class="form-control" placeholder="Nisn" autocomplete="off" required>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Nis :</strong>
                    <input type="text" name="nis" value="{{ $siswa->nis }}" class="form-control" placeholder="Nis" autocomplete="off" required>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Nama :</strong>
                    <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control" placeholder="Nama" autocomplete="off" required>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Email :</strong>
                    <input type="text" name="email" value="{{ $usr->email }}" class="form-control" placeholder="Email" autocomplete="off" required>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Id Rombel :</strong>
                <select name="id_rombel" id="" class="form-control" placeholder="Id Rombel" required>
                    <option value="" selected >Pilih Rombel</option>
                    @foreach($rombel as $a)
                        <option value="{{$a->id}}"
                        @if ($siswa->id_rombel == $a->id)
                        selected
                        @endif
                        >{{$a->nama_rombel}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-5 col-sm-5 col-md-5">
            <div class="form-group">
                <strong>Alamat :</strong>
                <textarea type="text" name="alamat"  class="form-control" placeholder="Alamat" autocomplete="off" required>{{ $siswa->alamat }}</textarea>
            </div>
        </div>
            <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>No Telp :</strong>
                    <input type="text" name="no_telp" value="{{ $siswa->no_telp }}" class="form-control" placeholder="No Telp" autocomplete="off" required>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Id Spp :</strong>
                    <select name="id_spp" id="" class="form-control" placeholder="Id Spp" required>
                <option value="" selected >Pilih Tahun</option>
                    @foreach($spp as $r)
                    <option value="{{$r->id}}"
                    @if ($siswa->id_spp == $r->id)
                        selected
                    @endif
                    >{{$r->tahun}}</option>
                    @endforeach
                    </select>
                </div>
            </div>
                 <div class="col-xs-5 col-sm-5 col-md-5 text-center">

                 <button type="submit" class="btn btn-danger">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection