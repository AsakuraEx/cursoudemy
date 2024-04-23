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
    <nav class="bg-gray-600 flex py-3 px-4 align-center w-full h-full">
        <span>
            <svg class="mx-4" width="64" height="64" viewBox="0 0 193 192" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M76.606 185.426C89.1345 160.738 107.71 152.586 125.028 146.691C133.547 143.791 139.035 140.267 142.412 136.469M51.0245 90.3117C49.0424 88.5098 44.102 86.5642 41.2075 82.1785M41.2075 82.1785C40.1559 80.5852 39.3744 78.6697 39.1029 76.3221C37.8623 65.5936 41.3637 58.5638 44.3637 54.6562C45.7964 52.7901 48.3595 53.8695 48.7212 56.1942C48.9778 57.8433 49.3427 59.7151 49.8584 61.5714C51.605 67.8591 66.5975 68.5173 70.6636 72.6498C71.027 73.0192 71.5818 73.1848 72.0555 72.9746C77.1824 70.6994 88.2842 68.0671 97.7608 73.3628C106.187 78.0713 111.036 86.061 113.097 91.1146M41.2075 82.1785C32.2907 96.759 17.7636 100.808 4.8689 99.3482M122.342 103.041C123.519 103.901 124.821 104.733 126.251 105.498C127.618 106.23 129.127 106.662 130.639 107.003C145.796 110.423 147.137 116.48 147.137 124.213C147.137 128.332 145.901 132.547 142.412 136.469M122.342 103.041C118.517 100.244 116.015 97.1399 114.713 95.0008C114.173 94.1138 113.848 93.1215 113.495 92.1452C113.376 91.818 113.244 91.4737 113.097 91.1146M122.342 103.041C99.5622 116.588 105.645 125.346 106.253 128.509C106.861 131.672 112.78 139.823 118.904 139.823C125.028 139.823 136.115 141.632 142.412 136.469M93.679 71.1008C104.097 54.1553 122.28 54.4347 131.445 56.9901C132.163 57.1903 132.357 58.0895 131.832 58.6181C122.092 68.4119 124.581 71.0048 123.908 75.3818C123.209 79.9248 122.818 89.811 113.097 91.1146" stroke="white" style="stroke:white;stroke-opacity:1;" stroke-width="6" stroke-linecap="round"/>
                <ellipse cx="74.4419" cy="101.99" rx="5.77832" ry="8.39374" fill="white" style="fill:white;fill-opacity:1;"/>
                <ellipse cx="121.125" cy="123.157" rx="3.42341" ry="4.97293" fill="white" style="fill:white;fill-opacity:1;"/>
                <ellipse cx="131.646" cy="123.157" rx="3.42341" ry="4.97293" fill="white" style="fill:white;fill-opacity:1;"/>
                <circle cx="96.5833" cy="95.8853" r="92.8386" stroke="white" style="stroke:white;stroke-opacity:1;" stroke-width="6"/>
            </svg>
        </span>
            <ul class="inline-flex">
                <a class="text-center text-white hover:text-gray-200 hover:border-b-2 hover:border-gray-100" href="{{ route('post.index') }}"><li class="px-4 border border-gray-600 m-0 py-4">Posts</li></a>
                <a class="text-center text-white hover:text-gray-200 hover:border-b-2 hover:border-gray-100" href="{{ route('category.index') }}"><li class="px-4 border border-gray-600 m-0 py-4">Categories</li></a>
                <a class="text-center text-white hover:text-gray-200 hover:border-b-2 hover:border-gray-100" href="{{ route('testing') }}"><li class="px-4 border border-gray-600 m-0 py-4">Testing</li></a>
            </ul>
        </nav>
        <div class="container">
            <div class="card card-white mb-4">
                <span class="title text-purple-900">
                    Testing de controles para formulario (Alabado sea el puerco)
                </span>
            </div>
        </div>


    <main>
        <div class="container">
            <div class="card card-white mb-4">
                <div class="my-2">
                    <span class="subtitle flex my-2">
                        Grid - Filas y Columnas
                    </span>
                    <div class="grid grid-rows-3 grid-cols-1 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1 sm">
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
                        <input class="form-control w-full" type="text" placeholder="Ingrese texto aqui..." required>
                    </div>
                    <div class="my-2">
                        <input class="form-control w-3/4" type="text" placeholder="Ingrese texto aqui..." required>
                    </div>
                    <div class="my-2">
                        <input class="form-control w-1/2" type="text" placeholder="Ingrese texto aqui..." required>
                    </div>
                    <div class="my-2">
                        <input class="form-control w-1/3" type="text" placeholder="Ingrese texto aqui..." required>
                    </div>
                    <div class="my-2">
                        <input class="form-control w-1/5" type="text" placeholder="Ingrese texto aqui..." required>
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
                <div class="my-2">
                    <span class="subtitle flex my-2">
                        Checkbox
                    </span>
                    <div class="my-2">
                        <div>
                            <Label>
                                <input type="checkbox" class="checkbox mr-1 rounded-2xl">Opcion 1
                            </Label>
                        </div>
                    </div>
                </div> 
                
                <div class="my-2">
                    <span class="subtitle flex my-2">
                        Navigation Bar
                    </span>
                    <nav class="bg-gray-600 flex py-3 px-4 align-center">
                        <span>
                            <svg class="mx-4" width="64" height="64" viewBox="0 0 193 192" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M76.606 185.426C89.1345 160.738 107.71 152.586 125.028 146.691C133.547 143.791 139.035 140.267 142.412 136.469M51.0245 90.3117C49.0424 88.5098 44.102 86.5642 41.2075 82.1785M41.2075 82.1785C40.1559 80.5852 39.3744 78.6697 39.1029 76.3221C37.8623 65.5936 41.3637 58.5638 44.3637 54.6562C45.7964 52.7901 48.3595 53.8695 48.7212 56.1942C48.9778 57.8433 49.3427 59.7151 49.8584 61.5714C51.605 67.8591 66.5975 68.5173 70.6636 72.6498C71.027 73.0192 71.5818 73.1848 72.0555 72.9746C77.1824 70.6994 88.2842 68.0671 97.7608 73.3628C106.187 78.0713 111.036 86.061 113.097 91.1146M41.2075 82.1785C32.2907 96.759 17.7636 100.808 4.8689 99.3482M122.342 103.041C123.519 103.901 124.821 104.733 126.251 105.498C127.618 106.23 129.127 106.662 130.639 107.003C145.796 110.423 147.137 116.48 147.137 124.213C147.137 128.332 145.901 132.547 142.412 136.469M122.342 103.041C118.517 100.244 116.015 97.1399 114.713 95.0008C114.173 94.1138 113.848 93.1215 113.495 92.1452C113.376 91.818 113.244 91.4737 113.097 91.1146M122.342 103.041C99.5622 116.588 105.645 125.346 106.253 128.509C106.861 131.672 112.78 139.823 118.904 139.823C125.028 139.823 136.115 141.632 142.412 136.469M93.679 71.1008C104.097 54.1553 122.28 54.4347 131.445 56.9901C132.163 57.1903 132.357 58.0895 131.832 58.6181C122.092 68.4119 124.581 71.0048 123.908 75.3818C123.209 79.9248 122.818 89.811 113.097 91.1146" stroke="white" style="stroke:white;stroke-opacity:1;" stroke-width="6" stroke-linecap="round"/>
                                <ellipse cx="74.4419" cy="101.99" rx="5.77832" ry="8.39374" fill="white" style="fill:white;fill-opacity:1;"/>
                                <ellipse cx="121.125" cy="123.157" rx="3.42341" ry="4.97293" fill="white" style="fill:white;fill-opacity:1;"/>
                                <ellipse cx="131.646" cy="123.157" rx="3.42341" ry="4.97293" fill="white" style="fill:white;fill-opacity:1;"/>
                                <circle cx="96.5833" cy="95.8853" r="92.8386" stroke="white" style="stroke:white;stroke-opacity:1;" stroke-width="6"/>
                            </svg>
                        </span>
                        
                        <ul class="inline-flex">
                            <a class="text-center text-white hover:text-gray-200 hover:border-b-2 hover:border-gray-100" href="{{ route('post.index') }}"><li class="px-4 border border-gray-600 m-0 py-4">Posts</li></a>
                            <a class="text-center text-white hover:text-gray-200 hover:border-b-2 hover:border-gray-100" href="{{ route('category.index') }}"><li class="px-4 border border-gray-600 m-0 py-4">Categories</li></a>
                            <a class="text-center text-white hover:text-gray-200 hover:border-b-2 hover:border-gray-100" href="{{ route('testing') }}"><li class="px-4 border border-gray-600 m-0 py-4">Testing</li></a>
                        </ul>
                    </nav>
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