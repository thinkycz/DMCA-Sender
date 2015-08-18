<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>DMCA Sender</title>
    <meta name="description" content="DMCA Sender">
    <meta name="author" content="Thinky">
    <link href="{{ elixir("css/all.css") }}" rel="stylesheet">
</head>

<body>
@include('partials.navbar')

<div class="wrapper">
@yield('content')
</div>

<script type="text/javascript" src="{{ elixir('js/all.js') }}"></script>
</body>

</html>