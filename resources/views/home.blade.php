<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                
                <div class="content">
                    <div class="content__image">
                        <img src="{{ Vite::asset('resources/images/sony.jpg') }}" alt="ferrari f40">
                    </div>
                    <div class="content__text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
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