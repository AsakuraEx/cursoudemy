@extends('layout.master')

@section('title','Mostrar Category')

@section('header')
    
    <h1>{{ $category->title }}</h1>

@endsection

@section('content')

    <div>Titulo: {{ $category->title }}</div>
    <div>Slug: {{ $category->slug }}</div>

    <a href="{{ route('category.index') }}"><button type="button" class="btn-primary mt-2">Regresar al listado</button></a>

@endsection

@section('footer')
    
@endsection

</body>
</html>