@extends('templates.default')
@section('title', 'PRODUTOS')
@section('content')
    <h1>PRODUCTS SECTION TEMPLATE</h1>
    <p><a href="@php echo DIRPAGE.'produto_create'; @endphp">Adicionar um produto</a></p>
    <p>{{$message ?? ''}}</p>
    @if(count($data)>1)
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
            <td>
                <a href="@php echo DIRPAGE.'produto/'.$produtos->id; @endphp">Ler</a> |
                <a href="@php echo DIRPAGE.'produto_edit/'.$produtos->id; @endphp">Editar</a> |
                <a href="@php echo DIRPAGE.'produto_delete/'.$produtos->id; @endphp">Deletar</a>
            </td>
        </tr>
    @endforeach
    </table>
    @else
        <br>
        <strong>NOME : </strong>{{$data[0]->name}}
        <br>
        <strong>PREÇO : </strong>{{$data[0]->price}}
        <br>
        <strong>CATEGORIA : </strong>{{$data[0]->idCategory}}

    @endif
@endsection