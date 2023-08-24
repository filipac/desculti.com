@props(['title' => ''])
<!DOCTYPE html>
<html class="no-js" lang="en">

@include('partials.head')


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
