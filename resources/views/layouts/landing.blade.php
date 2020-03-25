<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="apple-touch-icon" sizes="120x120" href="/img/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/iconsfavicon-16x16.png">
    <link rel="mask-icon" href="/img/icons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  </head>

  <body>
    <!-- WELCOME -->
    <section id="app-layout">

      @include('includes.side-menu')

      <div class="welcome-jumbo">
        <div class="status">NEW</div>
        <h1>Billy Burger</h1>
        <img src="https://i.ya-webdesign.com/images/hamburger-and-fries-png-4.png" class="burger-fries">
      </div>

    </section>

    @yield('content')
    
    <!-- <script src="/js/dist/vendors~FirstComp.js"></script>
    <script src="/js/dist/FirstComp.js"></script>
    <script src="/js/dist/main.js"></script> -->
  </body>

</html>
