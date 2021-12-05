@extends('templates.template')

@section('content')
    <h1>@if(isset($book)) Editar @else Cadastrar @endif</h1>
    <hr>
    @if(isset($book))
        <form name="formEdit" id="formEdit" action="{{url('books/$book->id')}}" method="post">
            @method('PUT')
    @else
        <form name="formCad" id="formCad" action="{{url('books')}}" method="post">
    @endif

        @csrf

        <label for="titulo">Título</label>
        <input type="text" name="titulo" id="titulo" placeholder="Título" value="{{$book->titulo ?? ''}}" required>
        <select name="autor" id="autor" required>Autor
            <option value="{{$book->relUsers->id ?? '0'}}">{{$book->relUsers->name ?? 'Selecione um Autor'}}</option>
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        <label for="pagina">Páginas</label>
        <input type="text" name="pagina" id="pagina" placeholder="Páginas" value="{{$book->pages ?? ''}}" required>
        <label for="preco">Preço</label>
        <input type="text" name="preco" id="preco" placeholder="Preço" value="{{$book->price ?? ''}}" required>
        <input type="submit" value="Salvar">


    </form>

    <!-- <div>
        <a href="{{url("books/create")}}">
            <button>Cadastrar</button>
        </a>
    </div> -->
@endsection