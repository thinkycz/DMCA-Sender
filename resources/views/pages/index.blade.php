@extends('app')

@section('content')
    <div class="jumbotron borders">
        <h1>Welcome to DMCA sender!</h1>
        <p>This site is a test site to send DMCA notices. Feel free to test. Made by Thinky.</p>
        <br>
        <p><a class="btn btn-primary btn-lg" href="{{ URL::action('NoticesController@create') }}" role="button">Send notice</a></p>
    </div>
@stop