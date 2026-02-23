<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товары</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) 
    <script src="{{ asset('js/app.js') }}"></script> 
</head>
<body>
    <div class="wrapper"> 
        
     
        <header class="header">
            <div class="container">
                <div class="header__inner">
                   
                    
                    <nav class="nav">
                        <ul class="nav__list">
                                <li class="nav__item"><a href="{{ route('home') }}" class="nav__link">Главная</a></li>
                               <li class="nav__item"><a href="{{ route('array') }}" class="nav__link">Товары</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <main class="main">
            <div class="container">

             
                <div class="array-actions">
                    <a href="/array/shuffle" class="action-link"> Перемешать</a> 
                    <a href="/array/sort" class="action-link"> Сортировать по цене (возрастание)</a>
                    <a href="/array/filter" class="action-link"> Отфильтровать (цена > 1000)</a>
                </div>

              
                
                @if(isset($array) && count($array) > 0) 
                    <div class="products-grid">
                       
                        @foreach($array as $product)
                           <div class="product-card__info">
                            <div class="product-card__image">
                                    <img src="{{ Vite::asset('resources/images/' . $product['path']) }}" alt="{{ $product['title'] }}">
                                </div>
                                    <h3 class="product-card__title">{{ $product['title'] }}</h3>
                                    <p class="product-card__price">{{ number_format($product['price'], 0, '', ' ') }} руб.</p>
                                </div>
                        @endforeach
                    </div>
                @else
                    <div class="no-products">
                        <p>Товары не найдены </p>
                        <a href="/array">Вернуться к списку</a> 
                    </div>
                @endif
                
             
            </div>
        </main>

      
        <footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <div class="copyright">
                        &copy; 2026 Величкин Данил. Все права защищены.
                    </div>
                </div>
            </div>
        </footer>
    </div>
    

</body>
</html>