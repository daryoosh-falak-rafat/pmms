@extends('../layout')

@section('content')
    <h1>Work Order</h1>

    <h2>For {{$property->address_line_1}} {{$property->postcode}}</h2>
    <p>
        {{$workOrder->description}}
    </p>

    <ul class="list-group">
        @foreach($workOrder->comments as $comment)
            <li class="list-group-item">
                {{ str_limit($comment->comment, $limit = 150, $end = '...') }}
                <a href="/edit-work-order-comment/{{ $comment->id }}" class="glyphicon-pencil"></a>
            </li>
        @endforeach
    </ul>

    <form method="post" action="/add-work-order-comment/work-order/{{$workOrder->id}}">
        <label for="comment">Add your comment</label>
        <div>
            <textarea class="form-control" type="text" name="comment" id="comment"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
@stop