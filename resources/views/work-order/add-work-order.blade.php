@extends('layouts.app')

@section('content')
    <h1>Create Work Order for {{ $property->address_line_1 }}</h1>

    <form method="post" action="/store-work-order/{{ $property->id }}">

        <label for="description">Work Description</label>

        <textarea class="form-control" type="text" name="description" id="description"></textarea>

        <button type="submit" class="btn btn-primary">Add Property</button>

    </form>
@stop