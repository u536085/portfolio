<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-8525MB06S8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8525MB06S8');
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Liam Meyvogel</title>
    <link rel="stylesheet" href="{{ url('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/home.css') }}">
    <script src="https://kit.fontawesome.com/55c7e8bc98.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
      <nav>
        <div class="logo"><a href="/" id="liam">Liam Meyvogel.</a></div>
          <input type="checkbox" id="click">
            <label for="click" class="menu-btn">
              <i class="fas fa-bars"></i>
            </label>
          <ul>
            <li><a href="/works">Projects</a></li>
            <li><a href="/about">About Me</a></li>
            <li><a href="/contact">Contact</a></li>
         </ul>
      </nav>
    </header>
    <main>
      <div class="container">
      <div class="intro">
        <h1>Hi<br>Welcome to my portfolio!<br>Take a look around.<br> And if u want to work with me<br> please don't hesitate <br>to <a id="contact" href="/contact">Contact</a> me.</h1>
      </div>
      <div class="foto">
          <img id="profiel_foto" src="{{ url('assets/img/foto.jpeg') }}" alt="profielfoto">
      </div>

      </div>
    </main>
  </body>
</html>
