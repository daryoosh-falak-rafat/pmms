@extends('layouts.app')

@section('content')
    <h1>Work Orders</h1>

    <h2>{{$property}}</h2>

    <ul class="list-group">
        @foreach($workOrders as $workOrder)
            <li class="list-group-item">
                {{ str_limit($workOrder->description, $limit = 150, $end = '...') }}
                <a href="/view-work-order/{{$workOrder->id}}">View</a>
            </li>
        @endforeach
    </ul>
@stop