<div class="form-group">
    {{Form::label('comment', 'Comment')}}
    {{Form::textarea('comment')}}
</div>

{{Form::submit($buttonLabel, ['class' => 'btn btn-primary'])}}