@extends('../layout')

@section('content')
    <h1>{{ $account->name }}</h1>
    <div class="col-xs-6">
        <h2>Properties</h2>
        <ul class="list-group">
            @foreach($account->properties as $property)
                <li class="list-group-item"><a href="/view-property/{{$property->id}}">{{$property->address_line_1}}, {{$property->postcode}}</a></li>
            @endforeach
        </ul>

    </div>
    <div class="col-xs-6">
        <h2>Work Orders</h2>
        <ul class="list-group">
            @foreach($workOrders as $workOrder)
                <li class="list-group-item"><a href="#">{{str_limit($workOrder->description, $limit = 80, $end = '...')}}</a></li>
            @endforeach
        </ul>
    </div>

@stop
