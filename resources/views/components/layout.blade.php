<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Big Kahuna Burger</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
    <header class="navbar">
        <div class="left"><img src="images\smalllogo.png">
            <h1 class="title">Big Kahuna Burgerggg</h1>
        </div>
        <nav class="right">
            <a href="menu">Menu</a>
            <a href="Catering">Catering</a>
            <a href="Gift Cards">Gift Cards</a>
            <a href="Careers">Careers</a>
            <a href="Order">Order Now</a>
            <a href="#x"><img src="/images/x_icon.svg"></a>
            <a href="#x"><img src="/images/insta_icon.svg"></a>
        </nav>
    </header>
    {{ $slot }}
        <footer class="footer">
            <div class="overlay"></div>
            <p>Testing!</p>
        </footer>
    </div>
</body>
</html>