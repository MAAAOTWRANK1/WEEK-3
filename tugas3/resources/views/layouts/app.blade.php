<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PBKK ITS — @yield('title')</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen {{ ($mode ?? 'light') === 'dark' ? 'dark bg-slate-950 text-slate-100' : 'bg-stone-50 text-slate-900' }}">
        @include('partials.navbar')
        <main>@yield('content')</main>
        @include('partials.footer')
    </body>
</html>