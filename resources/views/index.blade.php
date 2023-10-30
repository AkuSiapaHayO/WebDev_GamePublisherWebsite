<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nexus.co | Welcome to the official Nexus.co Website</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body class="body">

    <nav class="navbar">
        <div class="navbar-left">
            <div class="navbar-logo">
                <img src="{{asset('assets/images/others/nexus.co.png')}}" alt="">
            </div>
            <ul class="navbar-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">Community</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <div class="search-bar">
                <img src="{{asset('assets/icons/search_icon.png')}}" alt="">
                <input type="text" placeholder="Search game....">
            </div>
        </div>
    </nav>

    <div class="slideshow-container">
        <div class="slideshow-slide fade">
            <img src="{{asset('assets/images/games/assassins_creed_mirage.png')}}" alt="">
        </div>
        <div class="slideshow-slide fade">
            <img src="{{asset('assets/images/games/resident_evil_4_remake.jpg')}}" alt="">
        </div>
    </div>

    <div class="footer-container">

    </div>

    <script src="{{asset('js/app.js')}}"></script>
</body>

</html>
