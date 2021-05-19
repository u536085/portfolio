<!DOCTYPE html>
<html>
   <head>
       <title>@yield('title', 'Laravel pagina')</title>
   </head>
   <body>
     <header>
       @yield('content')
       <ul>
           <li><a href="/">Home</a></li>
           <li><a href="/about">About</a></li>
           <li><a href="/work">Work</a></li>
           <li><a href="/contact">Contact</a></li>
       </ul>
      </header>
   </body>
</html>
