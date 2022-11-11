<!--Pagina Home donde se puede ver el disño de la pagina principal-->
@extends('layouts.app-master')

@section('content')
    <h1>Home</h1>

    @Auth
    <p>Bienvenido {{auth()->user()->username ?? auth()->user()->username}} estas autenticado</p>
    <p>
        <a href="/logout">Cerrar Sesion</a>
    </p>
    @endauth

    @guest 
    <p>para ver el contenido <a href="/login">inicia sesiòn</a></p>
    @endguest
@endsection
