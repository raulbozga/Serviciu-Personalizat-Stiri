<!DOCTYPE html>

<link rel="stylesheet" href="../CSS/style.css">
<link rel="stylesheet" href="app.css">


<meta charset="utf-8">
<script src="api.js"></script>


<title>Serviciu stiri</title>

<header>

    <a href="/">
        <h1>Serviciu stiri</h1>
    </a>


    <form action="/categories/sport" method="get">

        <button class="button" value="send"> Sports </button>

    </form>
    <form action="/categories/business" method="get">

        <button type="submit" class="button" value="send">Busines</button>

    </form>
    <form action="/categories/environment" method="get">
        <button type="submit" class="button" value="send">Environment</button>

    </form>
    <form action="/categories/food" method="get">
        <button type="submit" class="button" value="send">Food</button>

    </form>
    <form action="/categories/health" method="get">
        <button type="submit" class="button" value="send">Health</button>

    </form>
    <form action="/categories/politics" method="get">
        <button type="submit" class="button" value="send">Politics</button>

    </form>
    <form action="/categories/science" method="get">
        <button type="submit" class="button" value="send">Science</button>

    </form>
    <form action="/categories/technology" method="get">
        <button type="submit" class="button" value="send">Technology</button>

    </form>
    <form action="/categories/top" method="get">
        <button type="submit" class="button" value="send">Top</button>

    </form>
    <form action="/categories/world" method="get">
        <button type="submit" class="button" value="send">World</button>

    </form>

    <form action="/categories/weather" method="get">
        <button type="submit" class="button" value="send">Search Weather</button>

    </form>
</header>

<body>

    <div class="">
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


        <div>
            {{$slot}}

        </div>

        <main id="main"></main>
</body>