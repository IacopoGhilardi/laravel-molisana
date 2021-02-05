<h3>{{ $title }}</h3>
<section class="cards">  
   
    @foreach ($pastaArray as $pasta)
        <div class="card">
            <img src="{{ $pasta['src'] }}" alt="pasta-img">
            <div class="layover">
                <a href="{{ route('prodotto', ['id' => $pasta['id']]) }}"><span>{{ $pasta['titolo'] }}</span></a>
            </div>
        </div>                
    @endforeach
</section>