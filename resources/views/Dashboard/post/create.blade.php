@extends('layout.master')

@section('title','Create Post')

@section('header')
    
    <h1>Crear Post</h1>

@endsection

@section('content')


    <form action="{{ route('post.store') }}" method="post">

        @include('dashboard.fragment._form')

    </form>
    <a href="{{ route('post.index') }}"><button type="button" class="btn-primary">Regresar al listado</button></a>



@endsection

@section('footer')

@endsection

</body>
</html>