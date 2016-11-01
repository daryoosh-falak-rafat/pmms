@extends('../layout')

@section('content')
    <div class="title m-b-md">
        Property
    </div>
    <div class="title m-b-md">
        {{$property->address_line_1}}
    </div>
    <p>
        {{$property->address_line_1}}, {{$property->town}}, {{$property->postcode}}
    </p>
@stop
