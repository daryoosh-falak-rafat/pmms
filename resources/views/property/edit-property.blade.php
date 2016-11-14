@extends('../layout')

@section('content')
    <h1>Update property</h1>
    <hr>
    <form method="post" action="/update-property/{{ $property->id }}">
        {{ method_field('patch') }}
        <label for="address_line_1" class="col-xs-2 col-form-label">Address Line 1</label>
        <div class="col-xs-10">
            <input class="form-control" type="text" name="address_line_1" id="address_line_1" value="{{ $property->address_line_1 }}">
        </div>
        <label for="address_line_2" class="col-xs-2 col-form-label">Address Line 2</label>
        <div class="col-xs-10">
            <input class="form-control"type="text" name="address_line_2" id="address_line_2" value="{{ $property->address_line_2 }}">
        </div>
        <label for="postcode"class="col-xs-2 col-form-label" >Postcode</label>
        <div class="col-xs-4">
            <input class="form-control"type="text" name="postcode" id="postcode" value="{{ $property->postcode }}">
        </div>
        <label for="town"class="col-xs-2 col-form-label" >Town</label>
        <div class="col-xs-4">
            <input class="form-control"type="text" name="town" id="town" value="{{ $property->town }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@stop
