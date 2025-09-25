@props(['title' => ''])
<!DOCTYPE html>
<html class="no-js" lang="en">

@include('partials.head')

<nav class="header-nav-wrap">
        <ul class="header-nav">
                 <li class="{{ request()->routeIs('home') ? 'current' : '' }}">
                    <a href="{{ route('home') }}" title="Home">Home</a></li>
                <li><a href="about.html" title="About">About</a></li>
                <li><a href="events.html" title="Services">Events</a></li>
                <li><a href="contact.html" title="Contact us">Contact</a></li>
                <li class="{{ request()->routeIs('archive') ? 'current' : '' }}">
                    <a href="{{ route('archive') }}" title="Archive">Archive</a></li>
            </ul>
        </nav>

<body id="top">

@include('partials.preloader')

{{$slot}}


@include('partials.footer')

<!-- Java Script
    ================================================== -->
<script src="{{ url()->to('/js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url()->to('/js/plugins.js') }}"></script>
<script src="{{ url()->to('/js/main.js') }}"></script>

@vite('resources/js/app.js')

</body>
