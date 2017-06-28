<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
       <script>window.laravel = { csrfToken: '{{ csrf_token() }}' }</script>
       <meta name="csrf-token" content="{{ csrf_token() }}">

       <link rel="stylesheet" href="/css/app.css">
       <title>Laravel 5.4 with VueJS</title>
   </head>
   <body>
        <div id="app" class="container">
            <tasks></tasks>
        </div>
        <script src="/js/app.js"></script>
   </body>
</html>
