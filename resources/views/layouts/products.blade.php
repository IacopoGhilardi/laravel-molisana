@extends('layouts.main')

@section('main')
    <div class="container-large">
        <section class="type-img">
            @yield('type')
        </section>    
        <section class="pack-img">
            @yield('pack')
        </section>
        
        <div class="container">
                <section class="description">
                    @yield('description')
                </section>
        </div>
    </div>
    
    

@endsection