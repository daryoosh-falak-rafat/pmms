@extends('layouts.app')

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
    <a href="/edit-property/{{$property->id}}" class="glyphicon glyphicon-pencil"></a>
    <hr>
    <h3>Work Orders</h3>
    <hr>
    <a href="/create-work-order/{{ $property->id }}" class="">Create Work Order</a>
    <hr>
    @if(empty($property->workOrders->all()))
        No outstanding work orders for this property
    @else
    <ul class="list-group">
        @foreach($property->workOrders as $workOrder)
            <li class="list-group-item">
                {{ str_limit($workOrder->description, $limit = 150, $end = '...') }}
                <a href="/view-work-order/{{$workOrder->id}}">View</a>
                <a href="/delete-work-order/{{$workOrder->id}}" class="pull-right">Delete</a>
                <a href="/edit-work-order/{{$workOrder->id}}" class="pull-right">Edit</a>
            </li>
        @endforeach
    </ul>
    @endif
@stop
