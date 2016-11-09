@extends('../layout')

@section('content')
    <h1>All Properties</h1>
    <hr>
    <a href="/add-property">ADD</a>
    <hr>
    <ul class="list-group">
        @foreach($properties as $property)
            <li class="list-group-item"><a href="/view-property/{{$property->id}}">{{$property->address_line_1}}, {{$property->postcode}}</a></li>
        @endforeach
    </ul>
@stop
