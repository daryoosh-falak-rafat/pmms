@extends('../layout')

@section('content')
    <div class="title m-b-md">
        Work Order
    </div>

    <div class="title m-b-md">
        For {{$property->address_line_1}} {{$property->postcode}}
    </div>
    <p>
        {{$workOrder->description}}
    </p>

    <ul class="list-group">
        @foreach($workOrder->comments as $comment)
            <li class="list-group-item">
                {{ str_limit($comment->comment, $limit = 150, $end = '...') }}
            </li>
        @endforeach
    </ul>

    <form method="post" action="/add-work-order-comment/work-order/{{$workOrder->id}}">
        <label for="comment">Add your comment</label>
        <div>
            <input class="form-control" type="text" name="comment" id="comment">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
@stop