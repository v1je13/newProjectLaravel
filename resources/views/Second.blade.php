<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second page</title>
         @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<h1>Вторая страничка</h1>
<p>{{$a}}</p>
<p>{{$b}}</p>
<p>сумма: {{$a+$b}}</p>
<div class="container mx-auto">
    @for ($i = 0; $i<count($mas); $i++ )
        <p class="border-b-2">
            {{$mas[$i]}}
        </p>
    @endfor

    @foreach($mas as $masik)
    <p class="border-b-2">
        {{$masik}}
    </p>
    @endforeach
</div>
</body>
</html>