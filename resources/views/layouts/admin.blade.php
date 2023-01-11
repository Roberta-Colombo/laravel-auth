<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
 <div id="admin">
    <div id="wrapper" class="d-flex">
        @include('partials.admin.left-sidebar')
        <main class="container-fluid">
            @yield('content')
        </main>
        @include('partials.admin.right-sidebar')
    </div>
 </div>

  <!--Main layout-->
</body>

</html>