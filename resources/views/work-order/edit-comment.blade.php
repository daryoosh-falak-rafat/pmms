@extends('../layout')

@section('content')
    <h1>Edit comment</h1>

    <form method="post" action="/update-work-order-comment/{{ $comment->id }}">
        {{ method_field('patch') }}
        <label for="comment">Edit your comment</label>
        <div>
            <textarea class="form-control" type="text" name="comment" id="comment">{{ $comment->comment }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@stop