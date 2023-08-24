<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>{{ $title ?? '' }}</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    @vite('resources/css/app.scss')

    <!-- script
    ================================================== -->
    <script src="{{ url()->to('/js/modernizr.js') }}"></script>
</head>
