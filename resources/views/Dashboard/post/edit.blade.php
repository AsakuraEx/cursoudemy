@extends('layout.master')

@section('title','Editar Post')

@section('header')
    
    <h1>Editar Post: {{ $post->title }}</h1>

@endsection

@section('content')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.update', $post->id) }}" method="post">

        @method('PATCH')
        @include('dashboard.fragment._form')


    </form>

@endsection

@section('footer')
    <a href="{{ route('post.index') }}"><button type="button">Regresar al listado</button></a>
@endsection

</body>
</html>