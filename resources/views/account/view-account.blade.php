@extends('layouts.app')

@section('content')
    <h1>{{ $account->name }}</h1>
    <div class="col-xs-6">
        <h2>Properties</h2>
        <ul class="list-group">
            @foreach($account->properties as $property)
                <li class="list-group-item">
                    <a href="/view-property/{{$property->id}}">{{$property->address_line_1}}, {{$property->postcode}}</a>
                </li>
            @endforeach
        </ul>
        <b>Total: {{$propertyCount}}</b>
    </div>

    <div class="col-xs-6">
        <h2>Open Work Orders</h2>
        <ul class="list-group">
            @foreach($openWorkOrders as $workOrder)
                <li class="list-group-item">
                    <a href="/view-work-order/{{$workOrder->id}}">{{str_limit($workOrder->description, $limit = 80, $end = '...')}}</a>
                </li>
            @endforeach
        </ul>
        <b>Total: {{$openWorkOrdersCount}}</b>
    </div>

    <div class="col-xs-6">
        <h2>Recently Complete Work Orders</h2>
        <ul class="list-group">
            @foreach($completeWorkOrders as $workOrder)
                <li class="list-group-item">
                    <a href="/view-work-order/{{$workOrder->id}}">{{str_limit($workOrder->description, $limit = 80, $end = '...')}}</a>
                </li>
            @endforeach
        </ul>
        <b>Total: {{$completedWorkOrdersCount}}</b>
    </div>
@stop
