<nav class="navbar bg-base-100">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
                <li><a href="{{ route('profile.edit') }}">{{ __('Profile') }}</a></li>
                <li>
                    <a>Parent</a>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-ghost w-full text-left">{{ __('Log Out') }}</button>
                    </form>
                </li>
            </ul>
        </div>

        <a class="btn btn-ghost text-xl" href="{{ route('dashboard') }}">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
        </a>
    </div>

    <div class="navbar-center hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="{{ route('dashboard') }}">{{ __('Dashboard') }}</a></li>
            <li><a href="{{ route('profile.edit') }}">{{ __('Profile') }}</a></li>
            <li>
                <details>
                    <summary>Parent</summary>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>

    <div class="navbar-end gap-2">
        @auth
            <a href="{{ route('profile.edit') }}" class="btn btn-primary">{{ __('Profile') }}</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn btn-secondary">{{ __('Log Out') }}</button>
            </form>
        @else
            <!-- If the user is not logged in -->
            <a href="{{ route('register') }}" class="btn btn-primary">{{ __('Register') }}</a>
            <a href="{{ route('login') }}" class="btn btn-secondary">{{ __('Login') }}</a>
        @endauth
    </div>
</nav>