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
            <li class="list-group-item">
                {{ str_limit($workOrder->description, $limit = 150, $end = '...') }}
                <a href="/view-work-order/{{$workOrder->id}}">View</a>
            </li>
        @endforeach
    </ul>
@stop