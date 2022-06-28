<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js"></script>
<link rel="stylesheet" href="../CSS/style.css">
<link rel="stylesheet" href="app.css">
<link href='https://css.gg/instagram.css' rel='stylesheet'>
<link href='https://css.gg/facebook.css' rel='stylesheet'>
<link href='https://css.gg/git-fork.css' rel='stylesheet'>


<title>Serviciu stiri</title>

<header>

    <a href="/">
        <h1 style="position: fixed ; padding: right 1rem;"><img src="../poze/logo2.png "></h1>
    </a>


    <x-buttons />

</header>

<body>

    <div>
        @if (Route::has('login'))
        <div class="all ">
            @auth
            <a href="{{ url('/dashboard') }}" class="dash">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="log">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="reg">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <x-flash />

        <div class="main-news">
            {{$slot}}
        </div>



    </div>

    <x-footer />


</body>