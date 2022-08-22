<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        {!! SEO::generate() !!}
        <meta name="theme-color" content="#000">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title') | Synite Quarries Limited</title>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">

        <link rel="preconnect" href="https://fonts.googleapis.com"> 
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,800&display=swap" rel="stylesheet">
    </head>
    <body>
      
      <div id="___gatsby">
        @include('partials._nav')
        <main class="body-main" id="pagecontent">
         @yield('content')
        </main>
      </div>
      
      @include('partials._footer')
      
    </body>
</html>
