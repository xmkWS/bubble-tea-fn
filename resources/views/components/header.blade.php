<header class="border-b border-white border-opacity-25">
    <div class="container py-5 flex flex-wrap items-center justify-between gap-">
        <a href="{{ route('index.index') }}" class="text-2xl text-orange-800">Bubble Tea</a>
        <ul class="flex flex-wrap items-center gap-14">
            <li><a class="h-5 hover:border-b border-orange-800 pb-2 transition text-orange-800" href="{{ route('index.index') }}">Main Page</a></li>
            <li><a class="h-5 hover:border-b border-orange-800 pb-2 transition text-orange-800" href="{{ route('index.catalog') }}">Catalog</a></li>
            <li><a class="h-5 hover:border-b border-orange-800 pb-2 transition text-orange-800" href="#">About Us</a></li>
            
            @if(auth()->user() && auth()->user()->role_id === 2)
            <li><a class="h-5 hover:border-b border-white pb-2 transition" href="{{ route('index.admin')}}">Admin Panel</a></li>
            @endif
        </ul>
        <div class="flex flex-wrap items-center gap-7">
            @auth
            <form action="{{ route('auth.logout')}}" method="post">
            @csrf
            <button type="submit" class="button">Exit</button>
            </form>
            @endauth
            
            @guest
                <a href="{{ route('auth.loginPage') }}" class="button">Sign In</a>
                <a href="{{ route('auth.registerPage') }}" class="button-fill">Sign Up</a>
            @endguest
        </div>
    </div>
</header>
