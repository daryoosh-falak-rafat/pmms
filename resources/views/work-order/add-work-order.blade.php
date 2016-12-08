@extends('layouts.app')

@section('content')
    <h1>Create Work Order for {{ $property->address_line_1 }}</h1>

    <form method="post" action="/store-work-order/{{ $property->id }}">
        <label for="description">Work Description</label>
        <textarea class="form-control" type="text" name="description" id="description"></textarea>

        <label for="priority">Priority</label>
        <select name="priority" id="priority">
            @foreach($priorities as $priority)
            <option value="{{ $priority->id }}">{{ $priority->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Add Work Order</button>

    </form>
@stop