<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!--Fonte do google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!--css bootstrap -->
        <!-- CSS only -->
        <link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<!--css da aplicação -->

        <link rel="stylesheet" href="/css/style.css">
       <script src="/js/scripts.js"></script>


<!--Font-awesome-->
<script src="https://kit.fontawesome.com/6d5c7c85fe.js" crossorigin="anonymous"></script>
    </head>
    <body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
            <img src="/img/logo.jfif" alt="logo">
        </a>

<ul class="navbar-nav">
    <li class="nav-item">
        <a href="/candidatos/create" class="nav-item">Candidatar</a>
    </li>
    <li class="nav-item">
        <a href="/" class="nav-item">Resultado</a>
    </li>
    <li class="nav-item">
        <a href="/" class="nav-item">Entrar</a>
    </li>
    <li class="nav-item">
        <a href="/" class="nav-item">Cadastrar</a>
    </li>


</ul>

</div>
    </nav>



</header>
<main>
    <div class="container-fluid">
        <div class="row">
            @if (session('msg'))
            <p class="msg">{{ session('msg') }}</p>
            @endif
            @yield('content')
        </div>
    </div>
</main>


        <footer>
            <p>Votação &copy; 2022</p>
        </footer>
    </body>
</html>
