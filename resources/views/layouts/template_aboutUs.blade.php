<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nexus.co</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo/nexus.co_logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/about_us.css') }}">
</head>
<body>

    @yield('layout')

    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-image">
                <img src="{{ asset('assets/images/logo/nexus.co.png') }}" alt="">
            </div>
            <ul class="py-4">
                <li><a href="viewAboutUs">ABOUT US</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="#">COMMUNITY</a></li>
                <li><a href="#">SUPPORT</a> </li>
                <li><a class="last" href="#">CAREERS</a></li>
            </ul>
            <div class="footer-copyright">
                <div class="footer-copyright-image pt-1 pb-5">
                    <p>&#169; 2023 Nexus Entertainment, Inc.</p>
                </div>
                <p>All <span>trademarks</span> referenced herein are the properties of their respective owners</p>
            </div>
        </div>
    </div>
</body>

</html>
