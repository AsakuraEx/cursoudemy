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
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> --}}

</head>
<body class="body">
    <div class="grid grid-cols-5 h-screen">
        <div class="sidebar w-72">
            <header>
                <div class="image-text">
                    <span class="py-1">
                        <img class="image" src="images/Post/IMG_POST_1713987696.jpg" alt="logo" >
                    </span>
                    <div class="text header-text">
                        <span class="name">
                            Francisco Escobar
                        </span>
                        <span class="profession">
                            Web Developer
                        </span>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
        
                            <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Cerrar Sesión') }}
                            </x-responsive-nav-link>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="sidebar-menu">
                    <a href="{{Route('dashboard')}}">
                        <button class="sidebar-option">
                            <i class='bx bxs-home-alt-2'></i>
                            <span class="px-3">Dashboard</span>
                        </button>
                    </a>
                    <a href="{{Route('post.index')}}">
                        <button class="sidebar-option">
                            <i class='bx bx-clipboard' ></i>
                            <span class="px-3">Post</span>
                        </button>
                    </a>
                    <a href="{{Route('category.index')}}">
                        <button class="sidebar-option">
                            <i class='bx bxs-category' ></i>
                            <span class="px-3">Category</span>
                        </button>
                    </a>
                    <a href="{{Route('testing')}}">
                        <button class="sidebar-option">
                            <i class='bx bxs-brush'></i>
                            <span class="px-3">Testing</span>
                        </button>
                    </a>
                    <a href="{{Route('sidebar')}}">
                        <button class="sidebar-option">
                            <i class='bx bxs-brush'></i>
                            <span class="px-3">Sidebar</span>
                        </button>
                    </a>
                </div>
                <div></div>
            </header>        
        </div>
        <div class="w-full col-span-4">
            <div class="container">
                <div class="card card-white mr-2 h-screen">
                    <span class="name">
                        Ahuevo si sirvio, bueno mao meno
                    </span>
                </div>
            </div>
        </div>
    </div>



    
</body>
</html>