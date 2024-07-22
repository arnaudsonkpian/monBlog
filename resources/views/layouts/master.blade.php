<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Mon blog Laravel')</title>
    <style>   
    </style>
</head>

<body>
    <h1>Ici Blog Laravel</h1>
    <p>Boom dans le master</p>
    <nav>
        <ul>
            <li><a href="/contact-us">Contactez nous</a></li>
            <li><a href="/about">A propos</a></li>
            <li><a href="/articles">articles</a></li>
            @yield('contenu')
        </ul>
    </nav>

</body>

</html>