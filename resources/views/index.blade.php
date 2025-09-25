<x-layout title="Home">

{{-- @include('partials.hero', ['title' => 'Welcome to Desculti', 'minHeight' => '60vh'])--}}

    <!-- header
    ================================================== -->
    <header class="s-header">

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
