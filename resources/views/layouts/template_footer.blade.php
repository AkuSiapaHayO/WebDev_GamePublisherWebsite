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
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap');

        body {
            font-family: "Roboto", sans-serif;
            overflow-x: hidden;
            background-color: #0f0f0f;
            padding: 0;
            margin: 0;
        }

        a {
            text-decoration: none;
        }

        ul {
            list-style: none;
        }

        .custom-green {
            background-color: (94, 136, 17);
        }

        /* -- For the Footer -- */
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

    @yield('layout')

    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-image">
                <img src="{{ asset('assets/images/logo/nexus.co.png') }}" alt="">
            </div>
            <ul class="my-4">
                <li><a href="viewGames">GAME</a></li>
                <li><a href="viewFranchises">FRANCHISE</a></li>
                <li><a href="viewAboutUs">ABOUT US</a></li>
                <li><a href="viewContactUs">CONTACT</a></li>
                <li><a href="viewCommunity">COMMUNITY</a></li>
                <li><a class="last" href="viewSupport">SUPPORT</a> </li>
            </ul>
            <div class="footer-copyright">
                <div class="footer-copyright-image">
                    <p>&#169; 2023 Nexus Entertainment, Inc.</p>
                </div>
                <p>All <span>trademarks</span> referenced herein are the properties of their respective owners</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/' . $javascript) }}"></script>
</body>

</html>
