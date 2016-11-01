@extends('../layout')

@section('content')
    <div class="title m-b-md">
        Work Order
    </div>

    <div class="title m-b-md">
        For {{$property->address_line_1}} {{$property->postcode}}
    </div>
    <p>
        {{$workOrder->description}}
    </p>
@stop