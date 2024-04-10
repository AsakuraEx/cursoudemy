@if ($errors->any())
@foreach ($errors->all() as $error)
    <div>
        {{ $error }}
    </div>
@endforeach
<br>
@endif