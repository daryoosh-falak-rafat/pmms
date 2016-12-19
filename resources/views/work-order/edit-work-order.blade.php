@extends('layouts.app')

@section('content')
    <h1>Update Work Order for {{ $workOrder->property->address_line_1 }}</h1>

    {!! Form::model($workOrder, ['action' => ['workOrders\EditWorkOrderController@update', $workOrder->id]]) !!}
        {{ method_field('patch') }}
        @include('work-order.forms.work-order-form', ['buttonLabel' => 'Update'])
    {!! Form::close() !!}
@stop