<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nexus.co | Welcome to the official Nexus.co Website</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/others/nexus.co.png') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav class="navbar">
        <div class="navbar-left">
            <div class="navbar-logo">
                <img src="{{ asset('assets/images/others/nexus.co.png') }}" alt="">
            </div>
            <ul class="navbar-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Community</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <div class="search-bar">
                <img src="{{ asset('assets/icons/search_icon.png') }}" alt="">
                <input type="text" placeholder="Search game">
            </div>
        </div>
    </nav>

    @yield('layout')

    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-image">
                <img src="{{ asset('assets/images/others/nexus.co.png') }}" alt="">
            </div>
            <ul>
                <li><a href="#">ABOUT US</a></li>
                <p class="line">|</p>
                <li><a href="#">CONTACT US</a></li>
                <p class="line">|</p>
                <li><a href="#">SUPPORT</a> </li>
                <p class="line">|</p>
                <li class="last"><a href="#">CAREERS</a></li>
            </ul>
            <div class="footer-copyright">
                <div class="footer-copyright-image">
                    {{-- <img src="{{ asset('assets/images/games/copyright.png') }}" alt=""> --}}
                    <p>&#169; 2023 Nexus Entertainment, Inc.</p>
                </div>
                <p>All <span>trademarks</span> referenced herein are the properties of their respective owners</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
