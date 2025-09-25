<x-layout title="Home">

{{-- @include('partials.hero', ['title' => 'Welcome to Desculti', 'minHeight' => '60vh'])--}}

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="/">
                <img src="/images/logo.png?v={{ time() }}" alt="Homepage" style="max-width: 500px; height: auto; object-fit: contain; display: block;">
            </a>
            
        </div>
        <div class="row hero-content">

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


    @include('partials.hero')


    @include('partials.about')


{{--    @include('partials.connect')--}}


{{--    @include('partials.events')--}}


    @include('partials.social')


    
  {{-- rest of home --}}

</x-layout>
