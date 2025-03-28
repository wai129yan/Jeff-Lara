<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
        <a href="/meet_the_team">Teams</a>
    </nav>
    {{-- <h1>Hello From Layout Page</h1> --}}

    {{ $slot }}    {{--/shortForm-}}
    {{-- <php echo $slot ?>    {{--/longForm-}} --}}

    {{-- // This is a PHP block
        // You can write PHP code here if needed --}}
    {{-- <h1>Hello From Layout Page</h1> --}}
</body>

</html>
