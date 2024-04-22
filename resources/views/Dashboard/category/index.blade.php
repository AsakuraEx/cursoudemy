@extends('layout.master')

@section('title', 'Categorias')
    
@section('header')

@endsection

@section('content')

    <a href="{{ route('category.create') }}"><button type="button" class="btn-primary">Crear Categoria</button></a>

    <table class="table">
        <thead>
            <tr>
                <th>
                    Categoria
                </th>
                <th>
                    Slug
                </th>
                <th>
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>
                        {{ $category->title }}
                    </td>
                    <td>
                        {{ $category->slug }}
                    </td>
                    <td class="td-action">
                        <a href="{{ route('category.edit', $category->id) }}"><button type="button" class="btn-edit">Editar</button></a>
                        <a href="{{ route('category.show', $category->id) }}"><button type="button" class="btn-show">Ver</button></a>

                        <form action="{{ route('category.destroy', $category->id) }}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn-danger">Eliminar</button>
                        </form>
                        
                    </td>
                </tr>                
            @endforeach
        </tbody>
    </table>

    {{ $categories->links() }}

@endsection

@section('footer')


@endsection