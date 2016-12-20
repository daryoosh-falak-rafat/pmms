<div class="form-group">
    {{Form::hidden('completed_date', \Carbon\Carbon::now())}}
</div>

{{Form::submit('Complete', ['class' => 'btn btn-primary'])}}