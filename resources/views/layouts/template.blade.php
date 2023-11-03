<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nexus.co</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo/nexus.co_logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="{{ asset('assets/images/logo/nexus.co_logo.png') }}" alt="">
            </div>
            <div class="navbar">
                <ul>
                    <li><a class="nav-link" href="/">Home</a></li>
                    <li><a class="nav-link" href="/viewGames">Games</a></li>
                </ul>
            </div>
            <div class="search-bar">
                <img src="{{ asset('assets/icons/search_icon_white.png') }}" alt="">
                <input type="text" placeholder="Search game">
            </div>
        </nav>
    </header>

    @yield('layout')

    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-image">
                <img src="{{ asset('assets/images/logo/nexus.co.png') }}" alt="">
            </div>
            <ul>
                <li><a href="#">ABOUT US</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="#">COMMUNITY</a></li>
                <li><a href="#">SUPPORT</a> </li>
                <li><a class="last" href="#">CAREERS</a></li>
            </ul>
            <div class="footer-copyright">
                <div class="footer-copyright-image">
                    <p>&#169; 2023 Nexus Entertainment, Inc.</p>
                </div>
                <p>All <span>trademarks</span> referenced herein are the properties of their respective owners</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
