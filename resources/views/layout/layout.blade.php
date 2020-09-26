<!doctype html>
<html lang="ru">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
</head>

<body>

<div class="wrapper">
    @include('layout.aside')

    <div class="content">
        @include('layout.top-panel')

        @yield('content')
    </div>
</div>

<script src="{{ mix('/js/manifest.js') }}"></script>
<script src="{{ mix('/js/vendor.js') }}"></script>
<script src="{{ mix('/js/app.js') }}"></script>
