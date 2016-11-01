@extends('../layout')

@section('content')
    <div class="title m-b-md">
        Work Order List
    </div>

    <div class="title m-b-md">
        {{$property}}
    </div>
    <ul>
        @foreach($workOrders as $workOrder)
            <li>{{$workOrder}}<a href="/view-work-order/{{$workOrder}}">View</a></li>
        @endforeach
    </ul>
@stop