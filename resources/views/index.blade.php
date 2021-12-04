@extends('templates.template')

@section('content')
    <h1>Teste</h1>
    <hr>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col">Preço</th>
            <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                @php
                    $user = $book->find($book->id)->relUsers;
                @endphp
            
                <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->titulo}}</td>
                    <td>{{$user->name}}</td>
                    <td>R$ {{$book->price}}</td>
                    <td>
                        <a href="{{url("books/$book->id")}}">
                            <button>Visualizar</button>
                        </a>
                        <a href="">
                            <button>Editar</button>
                        </a>
                        <a href="">
                            <button>Deletar</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        <a href="">
            <button>Cadastrar</button>
        </a>
    </div>
@endsection