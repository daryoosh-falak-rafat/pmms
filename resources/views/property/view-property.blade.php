@extends('../layout')

@section('content')
    @if(!empty($property->address_line_1))
        <h2><b>Address (Line One): </b>{{$property->address_line_1}}</h2>
    @endif
    @if(!empty($property->address_line_2))
        <h2><b>Address Line 2: </b>{{$property->address_line_2}}</h2>
    @endif
    @if(!empty($property->town))
        <h2><b>Town/City: </b>{{$property->town}}</h2>
    @endif
    @if(!empty($property->postcode))
        <h2><b>Postcode: </b>{{$property->postcode}}</h2>
    @endif
    <hr>
    <h3>Work Orders</h3>
    @if(empty($property->workOrders->all()))
        No outstanding work orders for this property
    @else
    <ul class="list-group">
        @foreach($property->workOrders as $workOrder)
            <li class="list-group-item">
                {{ str_limit($workOrder->description, $limit = 150, $end = '...') }}
                <a href="/view-work-order/{{$workOrder->id}}">View</a>
            </li>
        @endforeach
    </ul>
    @endif
@stop
