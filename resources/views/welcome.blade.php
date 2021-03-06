<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>window.Laravel = {csrfToken: '{{ csrf_token() }}'}</script>
    <title>Vue Front End For A Laravel API</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body class="container-fluid">
<div id="app">
    <navbar></navbar>
    <post-list></post-list>
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>