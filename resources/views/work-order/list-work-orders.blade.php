@extends('../layout')

@section('content')
    <div class="title m-b-md">
        Work Order List
    </div>

    <div class="title m-b-md">
        {{$property}}
    </div>
    <ul class="list-group">
        @foreach($workOrders as $workOrder)
            <li class="list-group-item">{{$workOrder}}<a href="/view-work-order/{{$workOrder}}">View</a></li>
        @endforeach
    </ul>
@stop