@extends('layouts.app')

@section('content')
    <h1>Edit comment</h1>

    {!! Form::model($comment, ['action' => ['workOrders\EditCommentController@update', $comment->id]]) !!}
        {{ method_field('patch') }}
        @include('work-order.forms.work-order-comment-form', ['buttonLabel' => 'Update'])
    {!! Form::close() !!}
@stop