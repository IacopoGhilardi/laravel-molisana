@extends('layouts.main')

@section('main')
    <div class="container">
        <h3>LE LUNGHE</h3>
        <section class="cards">
            @foreach ($lunga as $pasta)
                <div class="card">
                    <img src="{{ $pasta["src"] }}" alt="pasta-img">
                    <div class="layover">
                        <a href="#">Vedi dettagli</a>
                    </div>
                </div>                
            @endforeach
        </section>
        <h3>LE CORTE</h3>
        <section class="cards">
            @foreach ($corta as $pasta)
                <div class="card">
                    <img src="{{ $pasta["src"] }}" alt="pasta-img">
                    <div class="layover">
                        <a href="#">Vedi dettagli</a>
                    </div>
                </div>
            @endforeach
        </section>
        <h3>LE CORTISSIME</h3>
        <section class="cards">
            @foreach ($cortissima as $pasta)
                <div class="card">
                    <img src="{{ $pasta["src"] }}" alt="pasta-img">
                    <div class="layover">
                        <a href="#">Vedi dettagli</a>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection