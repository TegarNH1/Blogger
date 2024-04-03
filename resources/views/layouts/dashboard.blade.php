<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @include('components.style')
</head>

<body>
    <nav class="navbar py-4 bg-soft-blue">
        <div class="container justify-content-between">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ url('assets/images/logo.png') }}" alt="NewsOnlen">
                <span>NewsOnlen</span>
            </a>
            <div class="d-flex gap-4">
                <a href="{{ route('dashboard.index') }}" class="link">Dashboard</a>
                <a class="link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </nav>

    <section class="bg-soft-blue">
        <div class="container">
            @yield('content')
        </div>
    </section>

    <footer class="py-5">
        <div class="container">
            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
                <p class="mb-0 fs-7 text-secondary">
                    &copy; 2024 Onlenkan Academy <br>
                    A division of Onlenkan
                </p>
                <a href="https://onlenkan.com" class="mb-0 fs-7 link">
                    Onlenkan / About
                </a>
            </div>
        </div>
    </footer>

    @include('components.script')
</body>

</html>
