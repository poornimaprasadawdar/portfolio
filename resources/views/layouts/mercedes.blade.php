<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

   
    <link rel="stylesheet" href="{{ asset('css/mercedes.css') }}">
</head>
<body>


<header class="top-header">
    <div class="container-fluid d-flex justify-content-between align-items-center px-4">

        
        <div class="menu-icon">
            ☰
        </div>

        
        <div class="logo text-center">
            <img src="{{ asset('images/mercedes-logo.png') }}" height="40" alt="Mercedes Logo">
        </div>

       
        <div class="right-icons d-flex align-items-center gap-3">
            <span>♡</span>
            <span>📍</span>
            <span>Login</span>
        </div>

    </div>
</header>



<nav class="secondary-nav">
    <div class="container d-flex gap-4">
        <a href="#" class="active">Financial Services Overview</a>
        <a href="#">Financing</a>
        <a href="#">Insurance</a>
    </div>
</nav>



@yield('content')


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>