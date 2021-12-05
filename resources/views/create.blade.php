@extends('templates.template')

@section('content')
    <h1>Visualizar</h1>
    <hr>
    
    <form name="formCad" id="formCad" action="{{url('books')}}" method="post">
        @csrf

        <label for="titulo">Título</label>
        <input type="text" name="titulo" id="titulo" placeholder="Título" required>
        <select name="autor" id="autor" required>Autor
            <option value="0">Selecione um Autor</option>
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
        <label for="pagina">Páginas</label>
        <input type="text" name="pagina" id="pagina" placeholder="Páginas" required>
        <label for="preco">Preço</label>
        <input type="text" name="preco" id="preco" placeholder="Preço" required>
        <input type="submit" value="Cadastrar">


    </form>

    <!-- <div>
        <a href="{{url("books/create")}}">
            <button>Cadastrar</button>
        </a>
    </div> -->
@endsection