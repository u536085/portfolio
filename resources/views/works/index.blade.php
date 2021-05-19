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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio - Liam Meyvogel</title>
    <link rel="stylesheet" href="{{ url('assets/css/header.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/works.css') }}">
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
            <li><a href="/">Home</a></li>
            <li><a href="/about">About Me</a></li>
            <li><a href="/contact">Contact</a></li>
         </ul>
      </nav>
    </header>
    <h1>My Projects</h1>
      <div class="Project">
      @extends('layouts.app')
      @section('content')
        @if(count($works) > 0)
            @foreach($works as $work)
                <div class="well">
                    <h3>{{$work->title}}</h3><br>
                    <button data-modal-target="#modal{{$work->id}}"><img src= {{ $work->imageUrl }} alt="" class="img"></button>
                    <p>{{$work->description}}</p>
                    <br>
                    <!--<small>Aangemaakt op {{ $work->created_at }}</small>-->
                    <div class="modal" id="modal{{$work->id}}">
                      <div class="modal-header">
                        <div class="title"><h3 class="popWorkTitle">{{$work->title}}</h3></div>
                        <button data-close-button class="close-button">&times;</button>
                      </div>
                <div class="modal-body">
                  <img class="popImg" src= {{ $work-> imageUrl }} alt="" class="img">
                  <img class="popImg2" src= {{ $work->imageUrl }} alt="" class="img"><br>
                  <p>{{$work->descriptionlong}}</p>
                </div>
                </div>
                <div id="overlay"></div>
              </div>
            </div>
            @endforeach
        @else
            <p>No Projects found!</p>
        @endif



  <script type="text/javascript">
  const openModalButtons = document.querySelectorAll('[data-modal-target]')
  const closeModalButtons = document.querySelectorAll('[data-close-button]')
  const overlay = document.getElementById('overlay')

  openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = document.querySelector(button.dataset.modalTarget)
    openModal(modal)
  })
  })

    overlay.addEventListener('click', () => {
  const modals = document.querySelectorAll('.modal.active')
  modals.forEach(modal => {
    closeModal(modal)
  })
  })

  closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const modal = button.closest('.modal')
    closeModal(modal)
  })
  })

  function openModal(modal) {
  if (modal == null) return
  modal.classList.add('active')
  overlay.classList.add('active')
  }

  function closeModal(modal) {
  if (modal == null) return
  modal.classList.remove('active')
  overlay.classList.remove('active')
  }
  </script>

      @endsection
  </body>
</html>
