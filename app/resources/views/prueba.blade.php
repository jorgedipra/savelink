<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>prueba</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>prueba</h1>
    <ul>
        <li> prueba</li>
        <li> prueba 1</li>
        <li>XXXX</li>
    </ul>
    @foreach ($a1 as $key)
        <h2>{{ $key['title'] }}</h2>
        <p>{{ $key['body'] }}</p>
    @endforeach

</body>
</html>