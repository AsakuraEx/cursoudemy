@extends('layout.master')

@section('title', 'Posts')
    
@section('header')
    <h1>Listado de Posts</h1>
@endsection

@section('content')

    <a href="{{ route('post.create') }}"><button type="button">Crear Post</button></a>

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
                    <td>
                        {{ $post->title }}
                    </td>
                    <td>
                        Categoria
                    </td>
                    <td>
                        {{ $post->posted }}
                    </td>
                    <td>
                        <a href="{{ route('post.edit', $post->id) }}"><button type="button">Editar</button></a>
                        <a href="{{ route('post.show', $post->id) }}"><button type="button">Ver</button></a>

                        <form action="{{ route('post.destroy', $post->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit">Eliminar</button>
                        </form>
                        
                    </td>
                </tr>                
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

@endsection
@section('footer')

@endsection