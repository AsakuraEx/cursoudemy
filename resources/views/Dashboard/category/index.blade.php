@extends('layout.master')

@section('title', 'Categorias')
    
@section('header')

@endsection

@section('content')

    <a href="{{ route('category.create') }}"><button type="button" class="btn btn-success-outline mb-2">Crear Categoria</button></a>

    <table class="table">
        <thead>
            <tr>
                <th class="w-1/2">
                    Categoria
                </th>
                <th class="w-1/2">
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
                        <div class="mx-1">
                            <a href="{{ route('category.edit', $category->id) }}"><button type="button" class="btn btn-warning-outline">Editar</button></a>
                        </div>
                        <div class="mx-1">
                            <a href="{{ route('category.show', $category->id) }}"><button type="button" class="btn btn-info-outline">Ver</button></a>
                        </div>
                        <form action="{{ route('category.destroy', $category->id) }}" method="post" class="mx-1">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger-outline">Eliminar</button>
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