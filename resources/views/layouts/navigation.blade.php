<nav x-data="{ open: true }"
    class="bg-white dark:bg-gray-800 w-64 fixed h-screen border-r border-gray-200 dark:border-gray-700 
    sidebar">
    <style>
        body {
            height: 100%;
            margin: 0;
        }

        .users-name {
            font-weight: 500;
            margin-top: 30px;
            color: White;
            font-size: 1.125rem;
            line-height: 1.75rem;
        }

        .text-gray-800 {
            --tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity));
        }

        @media (prefers-color-scheme: dark) {
            .dark\:text-gray-200 {
                --tw-text-opacity: 1;
                color: rgb(229 231 235 / var(--tw-text-opacity));
            }
        }

        .nav-link {
            font-size: 18px;
            padding: 12px 16px;
            color: white;
        }

        .nav-link:before {
            content: ' \003E';
            color: white;
        }

        .under-link {
            font-size: 16px;
            padding: 16px;
            color: white;
        }

        .sidebar {
            box-shadow: 5px 4px 8px rgba(0, 0, 0, 0.1);
            height: 100vh;
            width: 25vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-size: cover;
            background-image: url('https://e1.pxfuel.com/desktop-wallpaper/820/363/desktop-wallpaper-2560x1440-minimalist-landscape-painting-1440p-resolution-minimalist-and-backgrounds-2560x1440-resolution.jpg');
            background-position: center;
        }

        .bottom-links {
            margin-top: auto;
            margin-bottom: 40px;
            display: grid;
            font-size: 18px;
            color: White;
        }

        .avatar {
            vertical-align: middle;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: white;
            margin-bottom: 50px;
        }
    </style>

    <div class="px-6 py-4 users-name">
        <div>{{ Auth::user()->name }}</div>
    </div>
    <div class="avatar"> </div>

    <div class="px-6 mt-4">
        <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'bg-gray-200' : '' }}">
            {{ __('Dashboard') }}
        </a>
        <div>
            <a href="{{ route('tasks.index') }}"
                class="under-link {{ request()->routeIs('tasks.*') ? 'bg-gray-200' : '' }}">
                {{ __('Tasks') }}
            </a>
        </div>
    </div>
    <div class="px-6 mt-4 nav-link">
        {{ __('Calender') }}
    </div>
    <div class="px-6 mt-4 nav-link">
        {{ __('Messages') }}
    </div>
    <div class="px-6 mt-4 nav-link">
        {{ __('Settings') }}
    </div>

    <div class="mt-3 bottom-links">
        <a href="{{ route('profile.edit') }}" {{ request()->routeIs('profile.edit') ? 'bg-gray-200' : '' }}">
            {{ __('Profile') }}
        </a>
        <form method="POST" action="{{ route('logout') }}" class="inline">
            @csrf
            <button type="submit">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</nav>

<main class="ml-64 p-8">
    {{ $slot }}
</main>
