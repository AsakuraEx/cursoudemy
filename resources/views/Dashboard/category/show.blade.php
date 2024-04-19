@extends('layout.master')

@section('title','Mostrar Post')

@section('header')
    
    <h1>{{ $post->title }}</h1>

@endsection

@section('content')

    <div>Titulo: {{ $post->title }}</div>
    <div>Slug: {{ $post->slug }}</div>
    <div>Content: {{ $post->content }}</div>
    <div>Description: {{ $post->description }}</div>
    <br>
    <h4>Ruta de Imagen: {{ $post->image }}</h4>
    <img src="{{ $post->image }}" alt="">  
@endsection

@section('footer')
    <a href="{{ route('post.index') }}"><button type="button">Regresar al listado</button></a>
@endsection

</body>
</html>