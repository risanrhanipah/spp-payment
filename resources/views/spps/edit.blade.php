@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-7 margin-tb">
            <div class="pull-left">
                <font face="Brush Script MT"><h1>Edit Spp</h1></font>
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

    <form action="{{ route('spps.update',$spp->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-5 col-sm-5 col-md-5">
                <div class="form-group">
                    <strong>Tahun Masuk :</strong>
                    <select name="awal" id="" class="form-control" placeholder="Id Spp">
                    <option value="" selected >Pilih Tahun</option>
                        <option value="2018"
                        @if (substr($spp->tahun, 0, 4) == 2018)
                        selected
                        @endif
                        >2018</option>
                        <option value="2019"
                        @if (substr($spp->tahun, 0, 4) == 2019)
                        selected
                        @endif
                        >2019</option>
                        <option value="2020"
                        @if (substr($spp->tahun, 0, 4) == 2020)
                        selected
                        @endif
                        >2020</option>
                        <option value="2021"
                        @if (substr($spp->tahun, 0, 4) == 2021)
                        selected
                        @endif
                        >2021</option>
                        <option value="2022"
                        @if (substr($spp->tahun, 0, 4) == 2022)
                        selected
                        @endif
                        >2022</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-7 col-sm-7 col-md-7">
                <div class="form-group">
                    <strong>Nominal :</strong>
                    <input type="number" name="nominal" value="{{ $spp->nominal }}" class="form-control" placeholder="Nominal" autocomplete="off" required>
                </div>
            </div>
            <div class="col-xs-5 col-sm-5 col-md-5 text-center">

              <button type="submit" class="btn btn-danger">Update</button>
            </div>
        </div>
    </form>
</div>
@endsection