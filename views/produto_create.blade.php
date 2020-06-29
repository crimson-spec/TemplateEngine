@extends('templates.default')
@section('title', 'ADICIONAR PRODUTOS')
@section('content')
    {{$success ?? ''}}

    @if(isset($data))
        <form name="form1" id="form1" method="POST" action="@php echo DIRPAGE.'produto_edit/'.$data[0]->id; @endphp">
    @else
        <form name="form1" id="form1" method="POST" action="@php echo DIRPAGE.'produto_create'; @endphp">
    @endif
            <input type="text" name="name" id="name" placeholder="Nome:" value="{{$data[0]->name ?? ''}}" required>
            <input type="text" name="price" id="price" placeholder="Preço:" value="{{$data[0]->price ?? ''}}" required>
            <select name="cat" id="cat">
                <option value="1">Frios</option>
                <option value="2">Mercearia</option>
                <option value="3">Padaria</option>
                <option value="4">Bebidas</option>
                <option value="5">Limpeza</option>
                <option value="6">Frutas</option>
            </select>
    @if(isset($data))
        <input type="submit" value="Editar">
    @else
    <input type="submit" value="Cadastrar">
    @endif            
        </form>
@endsection