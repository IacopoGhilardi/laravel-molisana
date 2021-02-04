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
        {{-- header --}}
        <header>
            <img src="{{ asset('img/marchio-sito-test.png') }}" alt="La Molisana">
            <ul class="list-inline">
                <li class=" {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" ><a href=" {{ route('home') }} ">HOME</a></li>
                <li  class=" {{ Route::currentRouteName() == 'prodotto' ? 'active' : '' }}"><a href=" {{ route('prodotto', ['id' => 0]) }} ">PRODOTTI</a></li>
                <li class=" {{ Route::currentRouteName() == 'news' ? 'active' : '' }}" ><a href="#">NEWS</a></li>
            </ul>
        </header>

        {{-- main  --}}
        <main>
            @yield('main')
        </main>
        
        {{-- footer --}}
        <footer>
            <div class="container">
                <div>
                    <img src="{{ asset('img/marchio-sito-test.png') }}" alt="La Molisana">
                    <p>Ragione sociale: La Molisana S.P.A<br>
                    Sede legale: Contrada Colle delle Api, 100/A <br>
                    86100 - Campobasso(CB)</p>
                </div>
                <div>
                   <h3>PASTIFICIO</h3>
                   <ul>
                       <li><a href="#">Il Pastificio</a></li>
                       <li><a href="#">Grano decorticato a pietra</a></li>
                       <li><a href="#">Il Molise c'è</a></li>
                       <li><a href="#">Filiera</a></li>
                       <li><a href="#">100 anni di pasta</a></li>
                       <li><a href="#">Sartoria della pasta</a></li>
                       <li><a href="#">Spaghetto Quadrato</a></li>
                       <li><a href="#">Le persone</a></li>
                    </ul> 
                    <h3>PRODOTTI</h3>
                    <ul>
                        <li><a href="#">Le Classiche</a></li>
                       <li><a href="#">Le Integrali</a></li>
                       <li><a href="#">Le Speciali</a></li>
                       <li><a href="#">Le Biologiche</a></li>
                       <li><a href="#">Le Gluten-Free</a></li>
                       <li><a href="#">Le Semole</a></li>
                       <li><a href="#">Le Extra di Lusso</a></li>
                    </ul>
                </div>
                <div>
                    <h3>COLLEZIONE DA CHEF</h3>
                    <ul>
                        <li><a href="#">Collezione da Chef</a></li>
                       <li><a href="#">Grandi Cucine</a></li>
                       <li><a href="#">Biologiche</a></li>
                       <li><a href="#">Quadrate</a></li>
                     </ul> 
                 </div>
            </div>
            <img src="{{ asset('img/footer-montagne-bottom.jpg') }}" alt="montagne" id="mountain">
        </footer>
    </body>
</html>