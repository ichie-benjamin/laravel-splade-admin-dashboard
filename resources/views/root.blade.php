<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/js/app.js'])

        <script>

            // On page load or when changing themes, best to add inline in `head` to avoid FOUC
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark')
            }
        </script>

        <style>
            .loader {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: hsl(240deg 7% 62% / 99%);
                z-index: 9999;
            }
            .loader img {
                width: 150px;
            }
        </style>

        @spladeHead
    </head>
    <body class="font-sans antialiased bg-gray-50 dark:bg-gray-900">
    <div class="loader" id="loader">
        <img src="/images/cpanel-loading.svg" alt="Loading...">
    </div>


        @splade

    <script>
        window.addEventListener('load', function () {
            const loader = document.getElementById('loader');
            loader.style.display = 'none';
        });
    </script>
    </body>



</html>
