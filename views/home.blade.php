@extends('templates.default')
@section('title', 'HOMEPAGE')
@section('content')
    <h1>MY FIRST SECTION TEMPLATE</h1>
    Bem vindo {{$name}} <br>
    <a href='@php echo DIRPAGE."produto/geladeira/consul"; @endphp'>Geladeira Consul</a> <br>
    <a href="@php echo DIRPAGE.'contato'; @endphp">Fale Conosco</a>
@endsection