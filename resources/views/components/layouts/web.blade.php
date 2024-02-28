<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if (app()->isLocale('ar')) dir="rtl" @else dir="ltr" @endif>
@props(['title'])

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if (app()->isLocale('ar'))
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');

            * {
                font-family: 'Rubik', sans-serif;
            }
        </style>
    @else
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

            * {
                font-family: 'Roboto', sans-serif;
            }
        </style>
    @endif
    <title>{{ $title }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/css/app.css'])
    @stack('styles')
</head>

<body>
    @include('components.web.header')
    @include('components.web.menu-bar')
    {{ $slot }}
    @include('components.web.footer')
    <script src="{{ asset('plugins/jQuery.js') }}" type="text/javascript"></script>
    @vite(['resources/js/app.js'])
    @stack('scripts')
</body>

</html>
