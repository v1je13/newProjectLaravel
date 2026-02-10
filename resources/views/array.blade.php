<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach ($array as $item)
            <div>
                <img src="{{ Vite::asset('resources/images/'$item['path']) }}" alt="{{$item['title']}}">
                <h3>{{$item['title']}}</h3>
                <p>{{$item['price']}}&#8381;</p>
            </div>
        @endforeach
    </div>
</body>
</html>