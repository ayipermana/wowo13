<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        body{
            font-family: monospace;  
        }
    </style>
</head>
<body>
    <nav class="nav navbar navbar-expand-lg navbar-dark fixied-top" style="background-color: rgb(0, 21, 255);">
        <div class="container">
            <a href="" class="navbar-brand">marketplace</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="dashboard">dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active"href="produk">porduk</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="profil">profil</a>
            </li>
        </ul>
    </div>
</nav>
@yield('navbar')

</body>
</html>