@extends('layouts.main')

@section('main')
    <div class="container">
        <section class="large-type">
            @yield('type')
        </section>    
        <section class="pack-img">
            @yield('pack')
        </section>
        <section class="description">
            @yield('description')
        </section>

    </div>

@endsection