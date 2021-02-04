@extends('layouts.main')

@section('main')
    <div class="container-large">
        <div class="container products">
            <h1> {{$id["titolo"]}} </h1>
            <img src="{{ $id["src-h"] }}" alt="{{ $id["titolo"] }}"> 
            <img src="{{ $id["src-p"] }}" alt="{{ $id["titolo"] }}">
            <p>{!! $id["descrizione"] !!}</p>
        </div>
    </div>
@endsection