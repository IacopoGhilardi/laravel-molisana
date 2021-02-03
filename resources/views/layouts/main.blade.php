<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- css -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

    <body>
        <header>
            <img src="{{ asset('img/marchio-sito-test.png') }}" alt="La Molisana">
            <ul class="list-inline">
                <li class="active"><a href="#">HOME</a></li>
                <li><a href="#">PRODOTTI</a></li>
                <li><a href="#">NEWS</a></li>
            </ul>
        </header>

        <main>
            @yield('main')
        </main>

        <footer>
            <div>
                <img src="{{ asset('img/marchio-sito-test.png') }}" alt="La Molisana">
            </div>
            <div>
               <h3></h3>
               <ul>
                   <li></li>
                </ul> 
            </div>
            <div>
                <h3></h3>
                <ul>
                    <li></li>
                 </ul> 
             </div>
        </footer>
    </body>
</html>