@extends('layout.master')

@section('title','Editar category')

@section('header')
    
    <h1>Editar category: {{ $category->title }}</h1>

@endsection

@section('content')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('category.update', $category->id) }}" method="post" enctype="multipart/form-data">

        @method('PATCH')
    
        @csrf

        <div>
            @if ($errors->any())
                @foreach ($errors->get('title') as $error)
                    <div style="color:red">
                        {{ $error }}
                    </div>
                @endforeach

            @endif
            <label for="">Titulo</label>
            <input type="text" name="title" value="{{ old('title', $category->title) }}">
        </div>
        <br>
        <div>
            @if ($errors->any())
                @foreach ($errors->get('slug') as $error)
                    <div style="color:red">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <label for="">Slug</label>
            <input type="text" name="slug" value="{{ old('slug', $category->slug) }}">
        </div>
        <br>
        <div>
            <button type="submit">Enviar</button>
            <button type="reset">Limpiar</button>
        </div>


    </form>

@endsection

@section('footer')
    <a href="{{ route('category.index') }}"><button type="button">Regresar al listado</button></a>
@endsection

</body>
</html>