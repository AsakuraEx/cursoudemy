@extends('layout.master')

@section('title', 'Posts')
    
@section('header')
    <h1>Listado de Posts</h1>
@endsection

@section('content')
    
    <table>
        <thead>
            <tr>
                <th>
                    Titulo
                </th>
                <th>
                    Categoria
                </th>
                <th>
                    Posted
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th>
                        {{ $post->title }}
                    </th>
                    <th>
                        Categoria
                    </th>
                    <th>
                        {{ $post->posted }}
                    </th>
                    <th>
                        Acciones
                    </th>
                </tr>                
            @endforeach
        </tbody>
    </table>

@endsection
@section('footer')
    <a href="{{ route('post.create') }}"><button type="button">Crear Post</button></a>
@endsection