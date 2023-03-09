<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.css" rel="stylesheet" />
        @vite(['resources/css/app.css','resources/js/app.js'])

        <title>Microfix - {{$title ?? ''}}</title>
        <meta name="description" content="{{$metaDescription ?? 'Reparación y venta de equipo de cómputo'}}" />

        {{-- se agrega ?? '' en caso de que el componente no tenga tittle --}}

              
    </head>
    <body class="bg-slate-100 dark:bg-slate-900">

        {{$slot}}
        {{--         la variable slot se usa para determinar donde se agregara contenido con los components --}}
        <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>




    </body>
</html>
