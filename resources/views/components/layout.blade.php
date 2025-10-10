@props(['title' => ''])
<!DOCTYPE html>
<html class="no-js" lang="en">

@include('partials.head')

<body id="top">

@include('partials.preloader')

<header class="s-header">
    <div class="header-logo">
        <a class="site-logo" href="/">
            <img src="/images/logo.png?v={{ time() }}" alt="Homepage" style="max-width: 260px; height: auto; object-fit: contain; display: block; margin-top: 100px;">
        </a>
    </div>

    <nav class="header-nav-wrap">
        <ul class="header-nav">
            <li class="{{ request()->routeIs('home') ? 'current' : '' }}">
                <a href="{{ route('home') }}" title="Home">Home</a>
            </li>
            <li><a href="{{ route('home') }}#about" title="About">About</a></li>
            <li><a href="https://www.facebook.com/events/1308732084031208" title="Events" target="_blank" rel="noopener noreferrer">Events</a></li>
            
            <li class="{{ request()->routeIs('archive') ? 'current' : '' }}">
                <a href="{{ route('archive') }}" title="Archive">Archive</a>
            </li>
        </ul>
    </nav>

    <a class="header-menu-toggle" href="#0"><span>Menu</span></a>
</header>

{{$slot}}


@include('partials.footer')

<!-- Java Script
    ================================================== -->
<script src="{{ url()->to('/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url()->to('/js/plugins.js') }}"></script>
<script src="{{ url()->to('/js/main.js') }}"></script>

@vite('resources/js/app.js')

</body>
