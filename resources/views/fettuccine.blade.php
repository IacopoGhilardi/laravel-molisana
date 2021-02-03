@extends('layouts.products')

@section('type')
    <div>
        <img src="{{ $lunga[1]["src-h"] }}" alt="">
    </div>
@endsection

@section('pack')
    <div>
        <img src="{{ $lunga[1]["src-p"] }}" alt="">
    </div>
@endsection

@section('description')
    <p>{!! $lunga[1]["descrizione"] !!}</p>
@endsection