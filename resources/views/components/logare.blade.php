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