@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <font face="Brush Script MT"><h1>Form Siswa</h1></font>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('siswas.create') }}">Create</a>
            </div>
        </div>
    </div>

   <div class="container">
<br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered" id="table_siswa">
    <thead>
        <tr>
            <th>No</th>
            <th>Nisn</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Rombel</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Id Spp</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
<?php $i = 0; ?>
        @foreach ($siswas as $siswa)

        <tr>
            <td>{{ ++$i }}</td> 
            <td>{{ $siswa->nisn }}</td>
            <td>{{ $siswa->nis }}</td>
            <td>{{ $siswa->nama }}</td>
            <td>{{ $siswa->nama_rombel }}</td>
            <td>{{ $siswa->alamat }}</td>
            <td>{{ $siswa->no_telp }}</td>
            <td>{{ $siswa->nominal }}</td>
            <td>
                <form action="{{ route('siswas.destroy',$siswa->id) }}" method="POST">

                    <a class="btn btn-success" href="{{ route('siswas.edit',$siswa->id) }}">Edit</a>
                       
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        <tbody>
    </table>
</div>

    {{-- {!! $siswas->links() !!} --}}   
    
<script>
        $(document).ready( function () {
            $('#table_siswa').DataTable();
        } );
    </script>
@endsection