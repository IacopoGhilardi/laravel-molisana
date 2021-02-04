@extends('layouts.main')

@section('main')
    <div class="container">

        {{-- pasta lunga  --}}
        <h3>LE LUNGHE</h3>
        <section class="cards">
            @foreach ($lunga as $pasta)
                <div class="card">
                    <img src="{{ $pasta["src"] }}" alt="pasta-img">
                    <div class="layover">
                        <a href="{{ route('prodotto', ['id' => $pasta["id"]]) }}"><span>{{ $pasta["titolo"] }}</span></a>
                    </div>
                </div>                
            @endforeach
        </section>

         {{-- pasta corta  --}}
        <h3>LE CORTE</h3>
        <section class="cards">
            @foreach ($corta as $pasta)
                <div class="card">
                    <img src="{{ $pasta["src"] }}" alt="pasta-img">
                    <div class="layover">
                        <a href="{{ route('prodotto', ['id' => $pasta["id"]]) }}"><span>{{ $pasta["titolo"] }}</span></a>
                    </div>
                </div>
            @endforeach
        </section>

        {{-- pasta cortissima  --}}
        <h3>LE CORTISSIME</h3>
        <section class="cards">
            @foreach ($cortissima as $pasta)
                <div class="card">
                    <img src="{{ $pasta["src"] }}" alt="pasta-img">
                    <div class="layover">
                        <a href="{{ route('prodotto', ['id' => $pasta["id"]]) }}"><span>{{ $pasta["titolo"] }}</span></a>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection