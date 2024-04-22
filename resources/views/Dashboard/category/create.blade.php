@extends('layout.master')

@section('title','Create Category')

@section('header')
    
    <h1>Crear Categoria</h1>

@endsection

@section('content')

    <form action="{{ route('category.store') }}" method="post">

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
            <input class="form-control" type="text" name="title" value="{{ old('title', $category->title) }}">
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
            <input class="form-control" type="text" name="slug" value="{{ old('slug', $category->slug) }}">
        </div>
        <br>
        <div>
            <button type="submit" class="btn-send">Enviar</button>
            <button type="reset" class="btn-clean">Limpiar</button>
        </div>
        <a href="{{ route('category.index') }}"><button type="button" class="btn-primary">Regresar al listado</button></a>
    </form>

@endsection

@section('footer')
    
@endsection

</body>
</html>