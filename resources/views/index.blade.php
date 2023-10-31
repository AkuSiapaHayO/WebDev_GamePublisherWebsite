<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav class="navbar">
        <div class="navbar-left">
            <div class="navbar-logo">Nexus.co</div>
            <ul class="navbar-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Games</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Community</a></li>
            </ul>
        </div>
        <div class="navbar-right">
            <div class="search-bar">
                <img src="https://i.fbcd.co/products/resized/resized-750-500/l004e-17-e03-mainpreview-f3bd24648e8b9810ebe94edb299771121e9257ed8614ba2cb20671fe44970129.jpg" alt="">
                <input type="text" placeholder="Search game....">
                {{-- <button type="submit">Search</button> --}}
            </div>
        </div>

        <img src="{{ asset }}" alt="">

    </nav>
</body>

</html>
