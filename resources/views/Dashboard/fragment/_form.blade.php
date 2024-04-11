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
    <input type="text" name="title" value="{{ old('title', $post->title) }}">
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
    <input type="text" name="slug" value="{{ old('slug', $post->slug) }}">
</div>
<br>
<div>
    <label for="">Categoria</label>
    <select name="category_id">
        <option value=""></option>
        @foreach ($categories as $title => $id)
            <option value="{{ $id }}" {{ old('category_id', $post->category_id) == $id ? "selected" : "" }}>{{ $title }}</option>            
        @endforeach

        {{-- @foreach ($categories as $option)
            <option value="{{ $option->id }}">{{ $option->title }}</option>
        @endforeach --}}
    </select>
</div>
<br>
<div>
    <label for="">Posted:</label>
    <input type="radio" name="posted" value="yes" {{ old('posted',$post->posted) == "yes" ? "checked" : "" }}>
    <label for="">Si</label>
    <input type="radio" name="posted" value="not" {{ old('posted',$post->posted) == "not" ? "checked" : "" }} {{ old('posted','') == "" ? "checked" : "" }}>
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
    <textarea name="content">{{ old('content', $post->content) }}</textarea>
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
    <textarea name="description">{{ old('description', $post->description) }}</textarea>
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
    @if (isset($task) && $task == 'edit')
        <label for="">Imagen</label>
        <input type="file" name="image">        
    @endif
</div>
<br>
<div>
    <button type="submit">Enviar</button>
    <button type="reset">Limpiar</button>
</div>
