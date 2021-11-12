@extends('layout')

@section('content')
<h1>datas</h1>

<p>
    <a class="btn btn-primary" href="/datas/create"><span class="glyphicon glyphicon-plus"></span> Add data</a>
</p>

<table class="table table-bordered table-hover">
    <thead>
        <th>officename</th>
        <th>pincode</th>
        <th>officeType</th>
        <th>Deliverystatus</th>
        <th>divisionname</th>
        <th>circlename</th>
        <th>Taluk</th>
        <th>Districtname</th>
    </thead>
    <tbody>
        @if ($datas->count() == 0)
        <tr>
            <td colspan="5">No datas to display.</td>
        </tr>
        @endif

        @foreach ($datas as $data)
        <tr>
            <td>{{ $data->officename }}</td>
            <td>{{ $data->pincode }}</td>
            <td>{{ $data->officeType }}</td>
            <td>${{ $data->Deliverystatus }}</td>
            <td>${{ $data->divisionname }}</td>
            <td>${{ $data->circlename }}</td>
            <td>${{ $data->Taluk }}</td>
            <td>${{ $data->Districtname }}</td>
            <td>
                <a class="btn btn-sm btn-success" href="{{ action('datasController@edit', ['id' => $data->id]) }}">Edit</a>

                <form style="display:inline-block" action="{{ action('datasController@destroy', ['id' => $data->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-sm btn-danger"> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $datas->links() }}

<p>
    Displaying {{$datas->count()}} of {{ $datas->total() }} data(s).
</p>

@endsection