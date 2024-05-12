{{-- 
    @extends('layouts.app')
    @section('title', 'Home')
    @section('meta-description', 'Home meta description')
    @section('content') --}}

    {{--  @component('components.layout') Esta es una forma de hacer que el contenido de la pagina se motifique y se agregue al layout pero hay otra forma de hacerlo que se mostrara a continuacion--}}

    <x-layouts.app title="Home" meta-description="Home meta description">
    <h1>Inicio</h1>
    </x-layouts.app>
    {{-- @endcomponent --}}
{{--     @endsection --}}
