<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>

    {{-- declare variable in laravel --}}
    @php
        $name = "Dara";
        $pw   = 123;
        $mb   = '011-223-344';
    @endphp

    <div class="">
        <h1 style="color: red;">Welcome to homepage</h1>
        <p>Username : {{$name}}</p>
        <p>Password : {{$pw}} </p>
        <p>Mobileph : {{$mb}} </p>
    </div>
    
</body>
</html>