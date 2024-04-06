@extends('layout.master')

@section('title', 'Contact')

@section('content')
    <h1>Contact 1: Cambios</h1>
    <p>{{ $name }}</p>

    @if( $name != "Francisco")
        Tu nombre no es Francisco
    @else
        Tu nombre es Francisco
    @endif 

    <h5>Uso de Foreach para el array de usuarios</h5>
    <ul>
        @foreach ([28, 29, 27, 34, 33] as $item)
        <li>{{ $item }}</li>       
        @endforeach
    </ul>


    <h5>Uso de Forelse para mostrar arrays y mostrar mensaje si esta vacio</h5>
    @forelse ($users as $user)
        <li>{{ $user }}</li>
        @empty
        <p>No hay usuarios activos</p>
        
    @endforelse    
@endsection

@section('footer')
    Footer        
@endsection

</body>
</html>