<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Portfolio')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>    
        <nav class="navbar">
            <ul>
                <li><a href="{{ url('/welcome') }}">Sign Up</a></li>
                <li><a href="{{ url('/home1') }}">Home</a></li>
                <li><a href="{{ url('/about') }}">About Me</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') 
    </main>
    
    
    @unless(View::hasSection('no_footer'))
        <footer class="footer">
            <p>&copy; 2024 MY PORTFOLIO. All rights reserved.</p>
        </footer>
    @endunless

</body>
</html>