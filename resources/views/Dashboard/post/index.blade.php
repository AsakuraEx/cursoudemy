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
        
    <a href="{{ route('post.create') }}"><button type="button" class="btn btn-success-outline mb-2">Crear Post</button></a>
    <div class="place-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th class="w-1/3">
                        Titulo
                    </th>
                    <th class="w-1/3">
                        Categoria
                    </th>
                    <th class="w-1/3">
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
                        <td class="td-action items-center">
                            <div class="mx-1">
                                <a href="{{ route('post.edit', $post->id) }}">
                                    <button type="button" class="btn btn-warning-outline">
                                        <span>
                                            Editar
                                        </span>   
                                    </button>
                                </a>
                            </div>
                            <div class="mx-1">
                                <a href="{{ route('post.show', $post->id) }}">
                                    <button type="button" class="btn btn-info-outline">
                                        Ver
                                    </button>
                                </a>
                            </div>
                            <form action="{{ route('post.destroy', $post->id) }}" method="post" class="mx-1">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger-outline">Eliminar</button>
                            </form>
                            
                        </td>
                    </tr>                
                @endforeach
            </tbody>
        </table>
    
        {{ $posts->links() }}
    </div>
        
        
    

    
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