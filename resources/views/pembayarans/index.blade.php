@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <font face="Brush Script MT"><h1>Form Pembayaran</h1></font>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('pembayarans.create') }}"> Create</a>
            </div>

        </div>
    </div>
        <div class="container">
    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @elseif ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table id="table_id" class="table table-bordered">
        <thead>
            <tr>
                    <th>Nisn</th>
                    <th>Nama Siswa</th>
                    <th>Tanggal Bayar</th>
                    <th>Bulan Bayar</th>
                    <th>Tahun Bayar</th>
                    <th>Id Spp</th>
                    <th>Jumlah Bayar</th>
                    <th>Nama Petugas</th>
                    <th width="280px">Action</th>
            </tr>
        </thead>
    <tbody>
    <?php $i = 0; ?>
            @foreach ($pembayarans as $pembayaran)
                <tr>
                    <td>{{ $pembayaran->nisn }}</td>
                    <td>{{ $pembayaran->nama }}</td>
                    <td>{{ $pembayaran->tgl_bayar }}</td>
                    <td>{{ $pembayaran->bulan_dibayar }}</td>
                    <td>{{ $pembayaran->tahun_dibayar }}</td>
                    <td>{{ $pembayaran->tahun }}</td>
                    <td> Rp. {{ $pembayaran->j_bayar }}</td>
                    <td>{{ $pembayaran->name }}</td>
                    <td>

                        <form action="{{ route('pembayarans.destroy',$pembayaran->id) }}" method="POST">

                            <a target="_blank" class="btn btn-warning" href="{{ route('pembayarans.show',$pembayaran->id) }}">Print Struk</a>

                            <!-- <a href="{{url('transaksi/spp/detail/'.$pembayaran->id)}}" class="btn btn-success">Print Struk</a> -->

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a target="_blank" class="btn btn-success" href="{{ url('export') }}" title="Create a product"> Generate Laporan</a>
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