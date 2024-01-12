<!DOCTYPE html> <html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Lab crud laravel basic</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <!-- Google Font: Source Sans Pro -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="sidebar-mini" style='height:auto'>
    <div class='wrapper'>
         @extends('layouts.sideBar')
    
        <div class='content-wrapper' style='min-hieght:1302.4px'>@yield('content')</div>
    
    </div>

</body>

</html>