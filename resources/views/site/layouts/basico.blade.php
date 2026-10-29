<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <link rel='stylesheet' href="{{asset('css/estiloBasico.css')}}">
    </head>

    <body>

    </body>
        @include('site.layouts._partials.topo')

        @yield('conteudo')
    </html>