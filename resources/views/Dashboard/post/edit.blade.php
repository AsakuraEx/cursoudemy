@extends('layout.master')

@section('title','Editar Post')

@section('header')
    
    <h1>Editar Post: {{ $post->title }}</h1>

@endsection

@section('content')

    @include('dashboard.fragment._errors-form')
    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">

        @method('PATCH')
        
        @include('dashboard.fragment._form', ['task' => 'edit'])


    </form>
    <a href="{{ route('post.index') }}"><button type="button" class="btn-primary">Regresar al listado</button></a>



@endsection

@section('footer')
    
@endsection

</body>
</html>