@extends('layouts.app')

@section('content')
    <h1>Update property</h1>
    <hr>
    {!! Form::model($property, ['action' => ['properties\EditPropertyController@update', $property->id]]) !!}
    {{ method_field('patch') }}
    @include('property.forms.property-form', ['buttonLabel' => 'Update'])
    {!! Form::close() !!}
@stop
