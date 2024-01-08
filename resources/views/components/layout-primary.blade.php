<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  @vite('resources/css/app.css')
  {{-- <link rel="stylesheet" href="{{asset('resources/css/app.css')}}"> --}}
</head>
<body>

 <nav class="bg-brightRedLight font-cormorant flex flex-row justify-between">
     <div class="" style="font-family: var(--ff-primary)">The Wish</div>
    <div class="">
        <a href="/">Home</a>
        <a href="/articles">Articles</a>
        <a href="">About</a>
    </div>
     <!-- hamburger icon -->
     <button id="menu-btn" class="hidden block hamburger md:hidden focus:outline-none">
         <span class="hamburger-top"></span>
         <span class="hamburger-middle"></span>
         <span class="hamburger-bottom"></span>
     </button>
 </nav>
   {{$slot}}
</body>
</html>
