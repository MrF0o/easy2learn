<!doctype html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Easy2Learn - Study 30% FASTER</title>

    <meta name="description"
        content="Easy2learn is an easy system that ask you questions you already added for later studying">

    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- Modules -->
    @yield('css')
    @vite(['resources/sass/main.scss', 'resources/js/app.js', 'resources/js/oneui/app.js'])

    <!-- Alternatively, you can also include a specific color theme after the main stylesheet to alter the default color theme of the template -->
    {{-- @vite(['resources/sass/main.scss', 'resources/sass/oneui/themes/amethyst.scss', 'resources/js/oneui/app.js']) --}}
    @yield('js')
</head>

<body>

    <div id="page-container">

        <header>
            @include('inc.navbar')
        </header>

        <!-- Main Container -->
        <main >
            @yield('content')
        </main>
        <!-- END Main Container -->
    </div>

    @include('inc.quiz')

    <footer id="page-footer" class="bg-body-light">
        @include('inc.footer')
    </footer>
    <!-- END Page Container -->
</body>

</html>
