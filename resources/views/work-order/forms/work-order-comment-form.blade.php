<div class="form-group">
    {{Form::label('comment', 'Comment')}}
    {{Form::textarea('comment', null ,['class' => 'col-xs-12'])}}
</div>

{{Form::submit($buttonLabel, ['class' => 'btn btn-primary'])}}