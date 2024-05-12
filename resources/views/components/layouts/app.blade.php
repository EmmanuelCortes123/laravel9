<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>Aprendible - @yield('title')</title>
    <meta name="description" content="@yield('meta-description', 'Default meta description')"> --}}
    <title>Aprendible - {{$title ?? ''}}</title>
    <meta name="description" content="{{$metaDescription ?? 'Default meta description' }}">
</head>
<body>
    {{-- @include('partials.navigation') --}}
    <x-layouts.navigation/>

    @if (session('status'))
        <div>
            {{session('status')}}
        </div>
    @endif

    {{ $slot }}
</body>
</html>