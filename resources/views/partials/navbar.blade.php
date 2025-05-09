<nav>
    <div class="brand">
        <a href="{{ Route::has('home-page') ? route('home-page') : '#' }}" class="title">
            {{ config('globals.app_name') }}
        </a>
    </div>

    <div class="nav_links">
        @php
            $nav_links = [
                ['route' => 'home-page', 'text' => 'Home'],
                ['route' => 'about-page', 'text' => 'About'],
                ['route' => 'services-page', 'text' => 'Services'],
                ['route' => 'products-page', 'text' => 'Products'],
                ['route' => 'contact-page', 'text' => 'Contact'],
            ];
        @endphp

        @auth            
            <a href="{{ Route::has('dashboard') ? route('dashboard') : '#' }}">Dashboard</a>
        @endauth

        @foreach($nav_links as $nav_link)
            <a 
            href="{{ Route::has($nav_link['route']) ? route($nav_link['route']) : '#' }}" 
            class="nav_link {{ Route::currentRouteName() === $nav_link['route'] ? 'active' : '' }}">
                {{ $nav_link['text'] }}
            </a>
        @endforeach
    </div>
    
    <div class="nav_authentication">
        @auth
            <div class="actions">
                <a href="{{ route('profile.edit') }}" class="profile">
                    <i class="fa fa-user"></i>
                </a>
    
                <form action="{{ route('logout') }}" method="post">
                    @csrf
    
                    <button type="submit" class="logout_btn">Logout</button>
                </form>
            </div>
        @else
            <a href="{{ route('login') }}" class="login_btn">Make An Inquiry</a>
        @endif
    </div>

    <div class="burger_menu">
        <div class="burger_icon" id="burgerIcon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</nav>
