<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'PST TECH') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom styles -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!-- Vite Assets -->
    @vite([
        'resources/css/app.css', 
        'resources/js/app.js',
        'resources/js/home.js',
        'resources/css/style.css',
        'resources/css/banner.css',
        'resources/js/banner.js',
    ])

    <!-- Livewire Styles -->
    @livewireStyles
</head>
<body>
    <!-- Navigation Bar -->
    @include('layouts.main-nav')

    <!-- Side Navigation Bar -->


    <!-- Main Content -->
    <div class="page-content">
        @yield('pages')
    </div>

    <!-- Footer -->
    @include('layouts.footer')
    @include('layouts.footer')

    <!-- Livewire Scripts -->
    @livewireScripts
</body>
</html>
