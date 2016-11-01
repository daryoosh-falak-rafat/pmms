@extends('../layout')

@section('content')
    <div class="title m-b-md">
        All Properties
    </div>

    <ul class="list-group">
        @foreach($properties as $property)
            <li class="list-group-item"><a href="/view-property/{{$property->id}}">{{$property->address_line_1}}, {{$property->postcode}}</a></li>
        @endforeach
    </ul>
@stop
