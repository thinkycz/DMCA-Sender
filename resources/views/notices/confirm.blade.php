@extends('app')

@section('content')

    <h1 class="page-heading">Confirm</h1>

    {!! Form::open(['method' => 'POST', 'action' => 'NoticesController@store']) !!}

    <div class="form-group">
        {!! Form::textarea('template', $template, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Send DMCA notice now', ['class' => 'form-control btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection