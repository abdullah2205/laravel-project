<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('meta-description')"/>
        <title>@yield('page-title', config('app.name', 'Laravel'))</title>
        <!-- Fonts -->
        @section('fonts')
            @include('layouts.component.fonts')
        @show
        <!-- Styles -->
        @section('styles')
            @include('layouts.component.styles')
        @show
    </head>

    <body class="@yield('body-class', '')">
        @yield('content')

        <!-- Scripts -->
        @section('scripts')
            @include('layouts.component.scripts')
        @show
    </body>
</html>
