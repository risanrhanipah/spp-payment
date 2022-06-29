@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <font face="Brush Script MT"><h1>Form Rombel</h1></font>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('rombels.create') }}"> Create</a>
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

    <table class="table table-bordered" id="table_rombel">
    <thead>
        <tr>
            {{--<th>No</th> --}}
                <th>Nama Rombel</th>
                <th>Kompetensi Keahlian</th>
                <th width="280px">Action</th>
        </tr>
    </thead>
<tbody>
    <?php $i = 0; ?>

        @foreach ($rombels as $rombel)
        <tr>
            {{--<td>{{ ++$i }}</td> --}}
                <td>{{ $rombel->nama_rombel }}</td>
                <td>{{ $rombel->kompetensi_keahlian }}</td>
            <td>
                <form action="{{ route('rombels.destroy',$rombel->id) }}" method="POST">

                       <a class="btn btn-success" href="{{ route('rombels.edit',$rombel->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{-- {!! $rombels->links() !!} --}}

    <script>
        $(document).ready( function (){
            $('#table_rombel').DataTable();
        } );
    </script>
</div>
@endsection