@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <font face="Brush Script MT"><h1>Form Petugas</h1></font>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ url('petugas/create') }}"> Create</a>
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

    <table class="table table-bordered" id="table_petugas">
    <thead>
        <tr>
            {{--<th>No</th> --}}
                <th>Username</th>
                <th>Password</th>
                <th>Nama Petugas</th>
                <th width="280px">Action</th>
        </tr>
    </thead>
<tbody>
        <?php $i = 0; ?>

        @foreach ($petugas as $as)
        <tr>
            {{--<td>{{ ++$i }}</td> --}}
                <td>{{ $as->username }}</td>
                <td>{{ $as->password }}</td>
                <td>{{ $as->nama_petugas }}</td>
            <td>
                <form action="{{ route('petugas.destroy',$as->id) }}" method="POST">

                       <a class="btn btn-success" href="{{ route('petugas.edit',$as->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

    {{-- {!! $petugass->links() !!} --}}
</div> 

<script>
        $(document).ready( function () {
            $('#table_petugas').DataTable();
        } );
</script>

@endsection