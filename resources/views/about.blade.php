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
    <link rel="stylesheet" href="{{ url('assets/css/about.css') }}">
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
            <li><a class="active" href="/">Home</a></li>
            <li><a href="/works">Projects</a></li>
            <li><a href="/contact">Contact</a></li>
         </ul>
      </nav>
    </header>
    <main>
      <h1>About Me!</h1>
      <div class="myInfo">
        <h2 id="top">Hi, I am Liam Meyvogel and I'm a Web Developer.<br>I'm 17 years old and live in Sliedrecht(The Netherlands)<br>
          I started Web Developing in 2019 for my studie at the Grafisch Lyceum.<br> From there I have learned a lot, I started with zero knowledge of coding<br> and now i'm building whole websites.<br>I also know a little bit about online marketing.
          So have I have obtained the certificate from the online marketing class from google.</h2></h2>
      </div>
      <div class="charts">
        <div class="staaf">
          <h2>Programs</h2>
          <img class="skil" id="staafdia" src="{{ url('assets/img/staaf.png') }}" alt="Staafdiagram">
        </div>
        <div class="circle">
          <h2>Skills</h2>
          <img class="skil" id="circledia" src="{{ url('assets/img/staaf2.png') }}" alt="cirkeldiagram">
        </div>
      </div>
        <img id="certificate" src="{{ url('assets/img/certificaat.jpg') }}" alt="certificaat">
    </main>
  </body>
</html>
