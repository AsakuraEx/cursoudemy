@extends('layout.master')

@section('title','Create Post')

@section('header')
    
    <h1>Crear Post</h1>

@endsection

@section('content')

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
                {{ $error }}
            </div>
        @endforeach
        <br>
    @endif

    <form action="{{ route('post.store') }}" method="post">
        @csrf

        @if ($errors->any())
            @foreach ($errors->get('title') as $error)
                <div style="color:red">
                    {{ $error }}
                </div>
            @endforeach
            <br>
        @endif

        <label for="">Titulo</label>
        <input type="text" name="title">
        
        <label for="">Slug</label>
        <input type="text" name="slug">

        <label for="">Categoria</label>
        <select name="category_id">
            <option value=""></option>
            @foreach ($categories as $title => $id)
                <option value="{{ $id }}">{{ $title }}</option>            
            @endforeach

            {{-- @foreach ($categories as $option)
                <option value="{{ $option->id }}">{{ $option->title }}</option>
            @endforeach --}}
        </select>
        
        <label for="">Posted:</label>
        <input type="radio" name="posted" value="yes">
        <label for="">Si</label>
        <input type="radio" name="posted" value="not" checked>
        <label for="">No</label>
        </select>

        <label for="">Contenido</label>
        <textarea name="content"></textarea>

        <label for="">Descripcion</label>
        <textarea name="description"></textarea>
        
        <button type="submit">Enviar</button>
        <button type="reset">Limpiar</button>
    </form>

@endsection

@section('footer')
    
@endsection

</body>
</html>