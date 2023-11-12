<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nexus</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo/nexus.co_logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/' . $css) }}">
<?php   if(isset($tailwind) ? 'active' : ''){ ?>
            <script src="https://cdn.tailwindcss.com"></script>
<?php   } ?>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        /* -------------- Navbar -------------- */

        :root {
            --color-1: #0b0e16;
            --color-2: rgb(94, 136, 17);
            --color-3: rgb(170, 170, 170);
        }

        body {
            margin: 0;
            overflow-x: hidden;
            font-family: "Roboto", sans-serif;
            background-color: #202020;
        }

        a {
            text-decoration: none;
        }

        ul {
            list-style: none;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.1);
            box-shadow: 0 5px 20px 0.1px rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(15px);
            z-index: 10;
            transition: 0.3s;
        }

        header.scrolled {
            background-color: rgba(0, 0, 0, 0.1);
            box-shadow: 0 5px 20px 0.1px rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(15px);
        }

        .logo {
            transition: 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 30px;
        }

        header .logo {
            height: 100px;
            line-height: 100px;
        }

        header.scrolled .logo {
            height: 70px;
            line-height: 70px;
        }


        nav {
            position: relative;
            width: 100%;
            max-width: 75rem;
            margin: auto;
            display: flex;
            align-items: center;
            height: 100%;
        }

        nav img {
            width: 40px;
        }

        .navbar {
            flex: 1;
            display: flex;
            justify-content: space-between;
            height: 100%;
        }

        .navbar ul {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .nav-link {
            position: relative;
            display: inline-block;
            margin: 0 1rem;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
            color: white;
            font-weight: 500;
            opacity: 0.9;
            transition: 0.3s;
        }

        .nav-link::after {
            content: "";
            position: absolute;
            width: 0;
            height: 10px;
            border-radius: 5px;
            background-color: rgb(94, 136, 17);
            bottom: 0;
            left: -5px;
            z-index: -1;
            opacity: 0;
            transition: 0.3s;
        }

        .nav-link:hover::after {
            width: 100%;
            opacity: 1;
        }

        .search-bar {
            display: flex;
            align-items: center;
            border: 1px solid white;
            border-radius: 20px;
            margin-right: 30px;
        }

        .search-bar img {
            max-width: 17px;
            margin-left: 17px;
            margin-right: 5px;
        }

        .search-bar input {
            padding-left: 5px;
            padding-right: 15px;
            padding-top: 10px;
            padding-bottom: 10px;
            border: none;
            background-color: rgba(255, 255, 255, 0);
            color: white;
            height: 25px;
            width: 200px;
        }

        .search-bar input::placeholder {
            color: white;
        }

        .search-bar input:focus {
            outline: none;
        }

        .icons {
            position: absolute;
            right: 0;
            margin: 0 30px;
            display: none;
            cursor: pointer;
            font-size: 25px;
            color: white;

        }

        #check {
            display: none;
        }

        /* -------------- Footer -------------- */

        .footer-container {
            background-color: white;
            padding: 40px;
        }

        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .footer-image img {
            width: 100px;
        }

        .footer-content ul {
            list-style: none;
            display: flex;
            align-items: center;
            padding-inline-start: 0;
        }

        .footer-container li {
            margin-right: 10px;
        }

        .footer-content a {
            text-decoration: none;
            font-weight: 500;
            color: black;
            border-right: 2px solid black;
            padding-right: 10px;
        }

        li .last {
            border: none;
        }

        .footer-content .line {
            margin-right: 10px;
        }

        .footer-copyright {
            font-size: 12px;
        }

        .footer-copyright-image {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .footer-copyright-image img {
            width: 12px;
            margin-right: 2px;
        }

        .footer-copyright span {
            color: black;
            text-decoration: underline;
        }

        @media screen and (max-width: 700px) {

            /* -------------- Navbar -------------- */

            .icons {
                display: inline-flex;
            }

            .icons #close-icon {
                display: none;
            }

            #check:checked~.icons #menu-icon {
                display: none;
            }

            #check:checked~.icons #close-icon {
                display: block;
            }

            .navbar {
                position: absolute;
                width: 100%;
                top: 100%;
                left: 0;
                height: 0;
                background-color: rgb(0, 0, 0, 0.8);
                backdrop-filter: blur(5px);
                transition: .7s ease;
                overflow: hidden
            }

            #check:checked~.navbar {
                height: 100px;
            }

            .navbar ul {
                display: block;
                font-size: 1.1rem;
                margin: 0.75rem 0;
                text-align: center;

            }

            header {
                background-color: rgb(0, 0, 0, 0.8);
                backdrop-filter: blur(5px);
            }

            header.scrolled {
                background-color: rgba(0, 0, 0, 0.8);
            }

            .logo {
                margin-left: 30px;
                margin-right: 30px;
            }

            header .logo {
                height: 50px;
                line-height: 50px;
            }

            header.scrolled .logo {
                height: 50px;
                line-height: 50px;
            }

            .navbar ul {
                padding: 0 0;
            }

            nav img {
                width: 25px;
            }

            .nav-link {
                margin-left: 0;
                margin-right: 25px;
                font-size: 8px;
            }

            /* -------------- Footer -------------- */

            .footer-container {
                padding: 40px 0px;
            }

            .footer-image img {
                width: 50px;
            }

            .footer-container li {
                margin-right: 5px;
            }

            .footer-container ul {
                margin: 15px 0 0px 0;
            }

            .footer-content a {
                font-size: 8px;
                border-right: 1px solid black;
                padding-right: 5px;
                font-weight: 500;
                letter-spacing: 0.3px;
            }

            li .last {
                border: none;
            }

            .footer-copyright {
                font-size: 7px;
                margin-top: 10px;
            }

            .footer-copyright p {
                margin: 1px 0;
                letter-spacing: 0.4px;
            }
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <img src="{{ asset('assets/images/logo/nexus.co_logo.png') }}" alt="">
            </div>
            <input type="checkbox" id="check">
            <label for="check" class="icons">
                <i class='bx bx-menu' id="menu-icon"></i>
                <i class='bx bx-x' id="close-icon"></i>
            </label>
            <div class="navbar">
                <ul>
                    <li><a class="nav-link" href="/">Home</a></li>
                    <li><a class="nav-link" href="/viewGames">Games</a></li>
                    <li><a class="nav-link" href="/viewFranchises">Franchise</a></li>
                    <li><a class="nav-link" href="/viewAboutUs">About Us</a></li>
                    <li><a class="nav-link" href="/viewSupport">Support</a></li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('layout')

    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-image">
                <img src="{{ asset('assets/images/logo/nexus.co.png') }}" alt="">
            </div>
            <ul class = "pt-4">
                <li><a href="/viewAboutUs">ABOUT US</a></li>
                <li><a href="viewContactUs">CONTACT US</a></li>
                <li><a href="/viewSupport">SUPPORT</a> </li>
                <li><a class="last" href="/viewCareers">CAREERS</a></li>
            </ul>
            <div class="footer-copyright">
                <div class="footer-copyright-image py-4">
                    <p>&#169; 2023 Nexus Entertainment, Inc.</p>
                </div>
                <p>All <span>trademarks</span> referenced herein are the properties of their respective owners</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/' . $javascript) }}"></script>
    <script>
        /* -------------- Nav -------------- */

        const header = document.querySelector("header");

        function stickyNavbar() {
            header.classList.toggle("scrolled", window.scrollY > 0)
        }

        stickyNavbar();

        window.addEventListener("scroll", stickyNavbar);
    </script>
</body>

</html>
