
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <header>
        <h1>My Laravel Website</h1>

        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('courses') }}">Courses</a>
            <a href="{{ route('contact') }}">Contact</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>Copyright © 2026 My Laravel Website</p>
    </footer>

</body>
</html>
