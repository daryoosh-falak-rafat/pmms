@extends('layouts.app')

@section('content')
    <h1>Create Work Order for {{ $property->address_line_1 }}</h1>

    {!! Form::model($workOrder, ['action' => ['workOrders\AddWorkOrderController@store', $property->id]]) !!}
    @include('work-order.forms.work-order-form', ['buttonLabel' => 'Save'])

    {!! Form::close() !!}
@stop