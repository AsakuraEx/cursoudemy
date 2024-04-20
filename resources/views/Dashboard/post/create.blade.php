@extends('layout.master')

@section('title','Create Post')

@section('header')
    
    <h1>Crear Post</h1>

@endsection

@section('content')

    <div class="container">
        <form action="{{ route('post.store') }}" method="post">

            @include('dashboard.fragment._form')

        </form>
        <a href="{{ route('post.index') }}"><button type="button">Regresar al listado</button></a>
    </div>


@endsection

@section('footer')

@endsection

</body>
</html>