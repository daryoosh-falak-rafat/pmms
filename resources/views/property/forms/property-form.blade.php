<div class="form-group">
    {{Form::label('address_line_1', 'Address Line One')}}
    {{Form::text('address_line_1')}}

    {{Form::label('address_line_2', 'Address Line Two')}}
    {{Form::text('address_line_2')}}

    {{Form::label('postcode', 'Postcode')}}
    {{Form::text('postcode')}}

    {{Form::label('town', 'Town')}}
    {{Form::text('town')}}
</div>

{{Form::submit($buttonLabel, ['class' => 'btn btn-primary'])}}