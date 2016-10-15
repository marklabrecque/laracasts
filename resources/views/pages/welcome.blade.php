<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        @if (empty($people))
            <div>There are no people</div>
        @else
            <ul>
                <!-- unless directive means if(!) -->
                @foreach ($people as $person)
                    <li>{{ $person }}</li>
                @endforeach
            </ul>
        @endif

    </body>
</html>
