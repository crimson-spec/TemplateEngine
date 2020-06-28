@extends('templates.default')
@section('title', 'PRODUTOS')
@section('content')
    <h1>PRODUCTS SECTION TEMPLATE</h1>
    <table>
        <tr>
            <td>NOME</td>
            <td>PREÇO</td>
            <td>AÇÃO</td>
        </tr>
    @foreach($data as $produtos)
        <tr>
            <td>{{$produtos->name}}</td>
            <td>{{$produtos->price}}</td>
            <td></td>
        </tr>
    @endforeach
@endsection