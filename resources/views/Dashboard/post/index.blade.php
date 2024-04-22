@extends('layout.master')

@section('title', 'Posts')
    
@section('header')

    <h1>Listado de Posts (Post actuales: {{ $data }} )</h1>
    <h2>Listado de Posts de Categoria 1: {{ $dataFilter1 }} posts</h2>
    <h2>Listado de Posts de Categoria 2: {{ $dataFilter2 }} posts</h2>
    {{-- @foreach ($data as $slug => $title)
        <p>Titulo: {{ $title }}</p>

    @endforeach --}}
@endsection

@section('content')
        
        <a href="{{ route('post.create') }}"><button type="button" class="btn-primary">Crear Post</button></a>
        <table class="table">
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
                            {{ $post->category->title }}
                        </td>
                        <td>
                            {{ $post->posted }}
                        </td>
                        <td class="td-action">
                            <a href="{{ route('post.edit', $post->id) }}">
                                <button type="button" class="btn-edit">
                                    <span>
                                        Editar
                                    </span>   
                                </button>
                            </a>
                            <a href="{{ route('post.show', $post->id) }}">
                                <button type="button" class="btn-show">
                                    Ver
                                </button>
                            </a>
                            <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn-danger">Eliminar</button>
                            </form>
                            
                        </td>
                    </tr>                
                @endforeach
            </tbody>
        </table>
    
        {{ $posts->links() }}
    

    
@endsection

@section('footer')

    {{-- <h3>Ejemplo de Imagen subida</h3>
    @foreach ($posts as $post)
        @if (isset($post->image))
            <h4>Titulo: {{ $post->title }}</h4>
        @endif
        <img src="{{ $post->image }}" alt="">    
    @endforeach --}}

    {{-- <h3>Ejemplo de consulta select + inner join</h3>
    <table>
        <tr>
            <td style="width: 25%"><strong>Titulo</strong></td>
            <td style="width: 25%"><strong>Slug</strong></td>
            <td style="width: 25%"><strong>Contenido</strong></td>
            <td style="width: 25%"><strong>Categoria</strong></td>
        </tr>
        @foreach ($join as $j)
                <tr>
                    <td>{{ $j->title }}</td>
                    <td>{{ $j->slug }}</td>
                    <td>{{ $j->content }}</td>
                    <td>{{ $j->titlec }}</td>
                </tr>
        @endforeach
    </table>
    {{ $join->links() }} --}}
@endsection