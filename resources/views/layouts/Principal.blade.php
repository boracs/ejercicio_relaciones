<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Titulo')</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

<header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('add_users')}}">Index</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('show_addreses')}}">Addresses</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('show_relation_address_user')}}">Rel_addr_users</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link "href="{{route('show_posts')}}">Posts</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link "href="{{route('show_asignaturas')}}">Asignaturas</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link "href="{{route('recent_posts')}}">Posts Recientes</a>
                    </li>
                </ul>
                </div>
            </div>
            </nav>
</header>



<main>  
        
    @yield('principal_section')

</main>  








    
</body>
</html>