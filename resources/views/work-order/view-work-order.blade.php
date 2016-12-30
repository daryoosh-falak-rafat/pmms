@extends('layouts.app')

@section('content')
    <h1>Work Order<a href="/edit-work-order/{{$workOrder->id}}" class="glyphicon glyphicon-pencil"></a></h1>

    <h2><b>Address: </b>{{$property->address_line_1}} {{$property->postcode}}</h2>
    <h3><b>Description:</b>
        @if(!empty($workOrder->description))
        {{$workOrder->description}}
        @else
        No Description (Press the edit button to add one)
        @endif
    </h3>
    <h3><b>Created:</b> {{ $workOrder->created_at->format('d/m/Y h:i:s A') }}</h3>

    <h3 class="bg-{{ $completedColour }}"><b>Expected Completion:</b> {{ $completionDate }} ({{ $timeLeft }})</h3>

    <h3><b>Priority:</b> {{ $workOrder->priority->name }}</h3>
    <hr>
    @if($workOrder->completed_date === null)
    {!! Form::model(null, ['action' => ['workOrders\CompleteWorkOrderController@index', $workOrder->id]]) !!}
    {{ method_field('patch') }}
    @include('work-order.forms.complete-work-order-form')
    {!! Form::close() !!}
    @else
    Work Order Complete {{$workOrder->completed_date}}
    @endif
    <hr>
    <h3>Comments</h3>
    <ul class="list-group">
        @foreach($workOrder->comments as $comment)
            {{ $comment->user->name }} - Added: {{ $comment->created_at }} Updated: {{ $comment->updated_at }}
            <li class="list-group-item">
                {{ str_limit($comment->comment, $limit = 150, $end = '...') }}
                <a href="/edit-work-order-comment/{{ $comment->id }}" class="glyphicon glyphicon-pencil pull-right"></a>
            </li>
        @endforeach
    </ul>
    @if($loggedIn)
    <h1>Add comment</h1>
    {!! Form::model(null, ['action' => ['workOrders\AddCommentController@add', $workOrder->id]]) !!}
    @include('work-order.forms.work-order-comment-form', ['buttonLabel' => 'Add'])

    {!! Form::close() !!}
    @endif
@stop