<div class="form-group">
    {{Form::label('address_line_1', 'Address Line One')}}
    {{Form::text('address_line_1', null ,['class' => 'col-xs-12'])}}
</div>
<div class="form-group">

    {{Form::label('address_line_2', 'Address Line Two')}}
    {{Form::text('address_line_2', null ,['class' => 'col-xs-12'])}}
</div>
<div class="form-group">

    {{Form::label('postcode', 'Postcode')}}
    {{Form::text('postcode', null ,['class' => 'col-xs-12'])}}
</div>
<div class="form-group">
    {{Form::label('town', 'Town')}}
    {{Form::text('town', null ,['class' => 'col-xs-12'])}}
</div>

{{Form::submit($buttonLabel, ['class' => 'btn btn-primary'])}}