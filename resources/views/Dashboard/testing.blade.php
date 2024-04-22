<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}

</head>
<body class="bg-slate-200 font-sans">

    <header>
        <div class="container">
            <div class="card card-white mb-4">
                <span class="title text-purple-900">
                    Testing de controles para formulario
                </span>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="card card-white mb-4">
                <div class="my-2">
                    <span class="subtitle flex my-2">
                        Grid - Filas y Columnas
                    </span>
                    <div class="grid grid-rows-3 grid-cols-2 lg:grid-cols-3">
                        <div class="bg-purple-300 text-center py-2 text-white font-bold text-xl m-1">
                            Columna 1, Fila 1
                        </div>
                        <div class="bg-purple-300 text-center py-2 text-white font-bold text-xl m-1">
                            Columna 2, Fila 1
                        </div>
                        <div class="bg-purple-300 text-center py-2 text-white font-bold text-xl m-1">
                            Columna 1, Fila 2
                        </div>
                        <div class="bg-purple-300 text-center py-2 text-white font-bold text-xl m-1">
                            Columna 2, Fila 2
                        </div>
                        <div class="bg-purple-300 text-center py-2 text-white font-bold text-xl m-1">
                            Columna 1, Fila 3
                        </div>
                        <div class="bg-purple-300 text-center py-2 text-white font-bold text-xl m-1">
                            Columna 2, Fila 3
                        </div>
                        <div class="bg-purple-300 text-center py-2 text-white font-bold text-xl m-1">
                            Columna 1, Fila 3
                        </div>
                        <div class="bg-purple-300 text-center py-2 text-white font-bold text-xl m-1">
                            Columna 2, Fila 3
                        </div>
                    </div>
                </div> 
                <div class="my-2">
                    <span class="subtitle">
                        Textfield
                    </span>
                    <div class="my-2">
                        <input class="form-control w-full" type="text" placeholder="Ingrese texto aqui...">
                    </div>
                    <div class="my-2">
                        <input class="form-control w-3/4" type="text" placeholder="Ingrese texto aqui...">
                    </div>
                    <div class="my-2">
                        <input class="form-control w-1/2" type="text" placeholder="Ingrese texto aqui...">
                    </div>
                    <div class="my-2">
                        <input class="form-control w-1/3" type="text" placeholder="Ingrese texto aqui...">
                    </div>
                    <div class="my-2">
                        <input class="form-control w-1/5" type="text" placeholder="Ingrese texto aqui...">
                    </div>
                </div>
                <div class="my-2">
                    <span class="subtitle">
                        Buttons
                    </span>
                    <div class="my-2">
                        <p>Buttons Outline</p>
                        <button class="btn btn-primary-outline">Primary Button</button>
                        <button class="btn btn-secundary-outline">Secundary Button</button>
                        <button class="btn btn-success-outline">Success Button</button>
                        <button class="btn btn-danger-outline">Danger Button</button>
                        <button class="btn btn-warning-outline">Warning Button</button>
                        <button class="btn btn-info-outline">Info Button</button>
                        <button class="btn btn-light-outline">Light Button</button>
                        <button class="btn btn-dark-outline">Dark Button</button>
                    </div>
                    <div class="my-2">
                        <p>Buttons Outline con icono uwu</p>
                        <button class="btn btn-primary-outline inline-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" heigth="24px">
                                <path  d="M20,10C22,13 17,22 15,22C13,22 13,21 12,21C11,21 11,22 9,22C7,22 2,13 4,10C6,7 9,7 11,8V5C5.38,8.07 4.11,3.78 4.11,3.78C4.11,3.78 6.77,0.19 11,5V3H13V8C15,7 18,7 20,10Z" />
                            </svg>
                            Primary Button
                        </button>
                        <button class="btn btn-secundary-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" heigth="24px">
                                <path  d="M20,10C22,13 17,22 15,22C13,22 13,21 12,21C11,21 11,22 9,22C7,22 2,13 4,10C6,7 9,7 11,8V5C5.38,8.07 4.11,3.78 4.11,3.78C4.11,3.78 6.77,0.19 11,5V3H13V8C15,7 18,7 20,10Z" />
                            </svg>
                            Secundary Button
                        </button>
                        <button class="btn btn-success-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" heigth="24px">
                                <path  d="M20,10C22,13 17,22 15,22C13,22 13,21 12,21C11,21 11,22 9,22C7,22 2,13 4,10C6,7 9,7 11,8V5C5.38,8.07 4.11,3.78 4.11,3.78C4.11,3.78 6.77,0.19 11,5V3H13V8C15,7 18,7 20,10Z" />
                            </svg>
                            Success Button
                        </button>
                        <button class="btn btn-danger-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" heigth="24px">
                                <path  d="M20,10C22,13 17,22 15,22C13,22 13,21 12,21C11,21 11,22 9,22C7,22 2,13 4,10C6,7 9,7 11,8V5C5.38,8.07 4.11,3.78 4.11,3.78C4.11,3.78 6.77,0.19 11,5V3H13V8C15,7 18,7 20,10Z" />
                            </svg>
                            Danger Button
                        </button>
                        <button class="btn btn-warning-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" heigth="24px">
                                <path  d="M20,10C22,13 17,22 15,22C13,22 13,21 12,21C11,21 11,22 9,22C7,22 2,13 4,10C6,7 9,7 11,8V5C5.38,8.07 4.11,3.78 4.11,3.78C4.11,3.78 6.77,0.19 11,5V3H13V8C15,7 18,7 20,10Z" />
                            </svg>
                            Warning Button
                        </button>
                        <button class="btn btn-info-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" heigth="24px">
                                <path  d="M20,10C22,13 17,22 15,22C13,22 13,21 12,21C11,21 11,22 9,22C7,22 2,13 4,10C6,7 9,7 11,8V5C5.38,8.07 4.11,3.78 4.11,3.78C4.11,3.78 6.77,0.19 11,5V3H13V8C15,7 18,7 20,10Z" />
                            </svg>
                            Info Button
                        </button>
                        <button class="btn btn-light-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" heigth="24px">
                                <path  d="M20,10C22,13 17,22 15,22C13,22 13,21 12,21C11,21 11,22 9,22C7,22 2,13 4,10C6,7 9,7 11,8V5C5.38,8.07 4.11,3.78 4.11,3.78C4.11,3.78 6.77,0.19 11,5V3H13V8C15,7 18,7 20,10Z" />
                            </svg>
                            Light Button
                        </button>
                        <button class="btn btn-dark-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" heigth="24px">
                                <path  d="M20,10C22,13 17,22 15,22C13,22 13,21 12,21C11,21 11,22 9,22C7,22 2,13 4,10C6,7 9,7 11,8V5C5.38,8.07 4.11,3.78 4.11,3.78C4.11,3.78 6.77,0.19 11,5V3H13V8C15,7 18,7 20,10Z" />
                            </svg>
                            Dark Button
                        </button>
                    </div>
                </div>
                <div class="my-2">
                    <span class="subtitle">
                        List
                    </span>
                    <div class="my-2">
                        <ul class="list-group w-1/3 text-center shadow-md">
                            <li class="list-group-item active">Opcion Activa</li>
                            <li class="list-group-item">Opcion 2</li>
                            <li class="list-group-item">Opcion 3</li>
                            <li class="list-group-item">Opcion 4</li>
                        </ul>
                    </div>
                </div>                
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="card card-white">
                <span>
                    Este es un testing, para regresar al dashboard dar clic en el siguiente botón: 
                </span>
                <div>
                    <a class="btn btn-secundary-outline mt-2" href="{{route('dashboard')}}">Dashboard</a>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>