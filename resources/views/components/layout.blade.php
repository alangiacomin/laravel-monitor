<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="Description" content="Put your description here.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'My title') }}</title>

    <!-- Styles -->
    <link href="{{ asset(mix('/css/app.css')) }}" rel="stylesheet">
</head>

<body>
{{ $slot }}
</body>

</html>
