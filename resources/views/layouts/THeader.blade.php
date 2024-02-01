@section('THeader')
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills green">
            <li class="nav-item">
                <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">home</a>
            </li>
            <li class="nav-item">
                <a href="/posts" class="nav-link {{ request()->is('posts') ? 'active' : '' }}">view posts</a>
            </li>
            @auth
                @if(auth()->user()->admin_level > 0)
                    <li class="nav-item">
                        <a href="/settings" class="nav-link {{ request()->is('settings') ? 'active' : '' }}">settings</a>
                    </li>
                @endif
            @endauth
            @auth
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link btn btn-link">Logout</button>
                    </form>
                </li>
            @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
            @endauth
        </ul>
    </header>

@show
