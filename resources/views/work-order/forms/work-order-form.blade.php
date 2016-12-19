<div class="form-group">
    {{Form::label('description', 'Description')}}
    {{Form::textarea('description', null ,['class' => 'col-xs-12'])}}
</div>
<div class="form-group">
    {{Form::label('priority_id', 'Priority')}}
    {{Form::select('priority_id', $priorities)}}
</div>

{{Form::submit($buttonLabel, ['class' => 'btn btn-primary'])}}