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
    <ul class="list-group">
        @foreach($property->workOrders as $workOrder)
            <li class="list-group-item">
                {{ str_limit($workOrder->description, $limit = 150, $end = '...') }}
                <a href="/view-work-order/{{$workOrder->id}}">View</a>
            </li>
        @endforeach
    </ul>
@stop
