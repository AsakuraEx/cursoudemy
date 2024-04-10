@extends('layout.master')

@section('title','Create Post')

@section('header')
    
    <h1>Crear Post</h1>

@endsection

@section('content')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.store') }}" method="post">
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
            <input type="text" name="title">
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
            <input type="text" name="slug">
        </div>
        <br>
        <div>
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
        </div>
        <br>
        <div>
            <label for="">Posted:</label>
            <input type="radio" name="posted" value="yes">
            <label for="">Si</label>
            <input type="radio" name="posted" value="not" checked>
            <label for="">No</label>
        </div>
        <br>
        <div>
            @if ($errors->any())
                @foreach ($errors->get('content') as $error)
                    <div style="color:red">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <label for="">Contenido</label>
            <textarea name="content"></textarea>
        </div>
        <br>
        <div>
            @if ($errors->any())
                @foreach ($errors->get('description') as $error)
                    <div style="color:red">
                        {{ $error }}
                    </div>
                @endforeach
            @endif
            <label for="">Descripcion</label>
            <textarea name="description"></textarea>
        </div>
        <br>
        <div>
            <button type="submit">Enviar</button>
            <button type="reset">Limpiar</button>
        </div>

    </form>

@endsection

@section('footer')
    
@endsection

</body>
</html>