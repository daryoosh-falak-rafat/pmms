@extends('layouts.app')

@section('content')
    <h1>Create Work Order for {{ $property->address_line_1 }}</h1>

    <form method="post" action="/store-work-order/{{ $property->id }}">
        <label for="priority">Priority</label>
        <input type="number" name="priority" id="priority" min="1" max="99">
        <label for="description">Work Description</label>
        <textarea class="form-control" type="text" name="description" id="description"></textarea>

        <button type="submit" class="btn btn-primary">Add Work Order</button>

    </form>
@stop