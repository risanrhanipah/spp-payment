@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <font face="Brush Script MT"><h1>Form Spp</h1></font>
            </div>
            <div class="pull-right">
                <a class="btn btn-info" href="{{ route('spps.create') }}"> Create</a>
            </div>
        </div>
    </div>
<br>
   <div class="container">

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered" id="table_spp">
    <thead>
        <tr>
            {{-- <th>No</th> --}}
            <th>Tahun</th>
            <th>Nominal</th>
            <th width="200px">Action</th>
        </tr>
    </thead>
<tbody>
    <?php $i = 0; ?>

        @foreach ($spps as $spp)
        <tr>
            {{-- <td>{{ ++$i }}</td> --}}
            <td>{{ $spp->tahun }}</td>
            <td> <b>Rp.</b> {{ $spp->nominal }}</td>
            <td>
                <form action="{{ route('spps.destroy',$spp->id) }}" method="POST">

                       <a class="btn btn-success" href="{{ route('spps.edit',$spp->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {{-- {!! $spps->links() !!} --}}

    <script>
        $(document).ready(function () {
            $('#table_spp').DataTable();
        } );
    </script>
</div>
@endsection