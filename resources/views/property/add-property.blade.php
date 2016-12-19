@extends('layouts.app')

@section('content')
    <h1>Add new property</h1>
    <hr>
    {!! Form::model(null, ['action' => ['properties\AddPropertyController@create']]) !!}
    @include('property.forms.property-form', ['buttonLabel' => 'Save'])
    {!! Form::close() !!}
@stop
