@extends('../layout')

@section('content')
    <h1>Create Work Order</h1>

    <form method="post" action="/add-work-order/store">
        {{ method_field('patch') }}

    </form>
@stop