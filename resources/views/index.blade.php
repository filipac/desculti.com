<x-layout title="Desculți Homecoming 2024 - Homepage">


    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="index.html">
                <img src="/images/logo.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav-wrap">
{{--            <ul class="header-nav">--}}
{{--                <li class="current"><a href="index.html" title="Home">Home</a></li>--}}
{{--                <li><a href="about.html" title="About">About</a></li>--}}
{{--                <li><a href="events.html" title="Services">Events</a></li>--}}
{{--                <li><a href="contact.html" title="Contact us">Contact</a></li>--}}
{{--            </ul>--}}
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


    @include('partials.hero')


    @include('partials.about')


{{--    @include('partials.connect')--}}


{{--    @include('partials.events')--}}


    @include('partials.social')

</x-layout>
