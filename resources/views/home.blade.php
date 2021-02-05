@extends('layouts.main')

@section('main')
    <div class="container">
        {{-- pasta lunga  --}}
        @include('layouts.product', ['title' => 'LE LUNGHE', 'pastaArray' => $lunga]);
        {{-- pasta corta  --}}
        @include('layouts.product', ['title' => 'LE CORTE', 'pastaArray' => $corta]);
        {{-- pasta cortissima  --}}
        @include('layouts.product', ['title' => 'LE CORTISSIME', 'pastaArray' => $cortissima]);
    </div>
@endsection