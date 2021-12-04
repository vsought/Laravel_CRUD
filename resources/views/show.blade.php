@extends('templates.template')

@section('content')
    <h1>Visualizar</h1>
    <hr>
    
    <div>
        @php
            $user = $book->find($book->id)->relUsers;
        @endphp
    
        
        <p>{{$book->id}}</p>
        <p>{{$book->titulo}}</p>
        <p>{{$book->price}}</p>
        <p>{{$user->name}}</p>
        <p>{{$user->email}}</p>
                   
    </div>

@endsection