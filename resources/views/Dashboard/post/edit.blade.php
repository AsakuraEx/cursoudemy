@extends('layout.master')

@section('title','Editar Post')

@section('header')
    
    <h1>Editar Post: {{ $post->title }}</h1>

@endsection

@section('content')

    @include('dashboard.fragment._errors-form')

    <form action="{{ route('post.update', $post->id) }}" method="post">
        @csrf

        @method('PATCH')

        <div>
            @if ($errors->any())
                @foreach ($errors->get('title') as $error)
                    <div style="color:red">
                        {{ $error }}
                    </div>
                @endforeach

            @endif
            <label for="">Titulo</label>
            <input type="text" name="title" value="{{ $post->title }}">
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
            <input type="text" name="slug" value=" {{ $post->slug }} " disabled>
        </div>
        <br>
        <div>
            <label for="">Categoria</label>
            <select name="category_id">
                <option value=""></option>
                @foreach ($categories as $title => $id)
                    <option {{ $post->category_id == $id ? 'selected' : ''}} value="{{ $id }}">{{ $title }}</option>            
                @endforeach
    
                {{-- @foreach ($categories as $option)
                    <option value="{{ $option->id }}">{{ $option->title }}</option>
                @endforeach --}}
            </select>
        </div>
        <br>
        <div>
            <label for="">Posted:</label>
            <input type="radio" name="posted" value="yes" {{ $post->posted == 'yes' ? 'checked' : ''}}>
            <label for="">Si</label>
            <input type="radio" name="posted" value="not" {{ $post->posted == 'yes' ? '' : 'checked'}}>
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
            <textarea name="content">{{ $post->content }}</textarea>
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
            <textarea name="description">{{ $post->description }}</textarea>
        </div>
        <br>
        <div>
            <button type="submit">Enviar</button>
            <button type="reset">Valores Predeterminados</button>
        </div>

    </form>

@endsection

@section('footer')
    <a href="{{ route('post.index') }}"><button type="button">Regresar al listado</button></a>
@endsection

</body>
</html>