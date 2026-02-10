<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>t3st</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    
    <header>
        <h1>Мой Веб-сайт</h1>
        <nav>
            <ul>
                <li><a href="#">Главная</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </nav>
    </header>

      <main>
      <div class="container mx-auto">
        <div class="">
                   @foreach ($array as $item)
            <div>
                <img src="{{ Vite::asset('resources/images/'$item['path']) }}" alt="{{$item['title']}}">
                <h3>{{$item['title']}}</h3>
                <p>{{$item['price']}}&#8381;</p>
            </div>
        @endforeach
        </div>
      </div>
    </main>

    
    <footer>
        <p>&copy;  Величкин Данил Дмитриевич 2026. Все права защищены.</p>
    </footer>

</body>
</html>

</body>
</html>