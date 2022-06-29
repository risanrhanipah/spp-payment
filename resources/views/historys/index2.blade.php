@extends('layouts.app')

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