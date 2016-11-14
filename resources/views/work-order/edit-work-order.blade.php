@extends('../layout')

@section('content')
    <h1>Update Work Order for {{ $workOrder->property->address_line_1 }}</h1>

    <form method="post" action="/update-work-order/{{ $workOrder->id }}">
        {{ method_field('patch') }}
        <label for="description">Work Description</label>

        <textarea class="form-control" type="text" name="description" id="description">{{ $workOrder->description }}</textarea>

        <button type="submit" class="btn btn-primary">Update</button>

    </form>
@stop