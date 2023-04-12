<x-layout>
<x-navbar></x-navbar>
<div class='container pad'>
  <div class="row">
    @if (session('access_denied'))
        <div class="alert alert-danger">
           {{ session('access_denied') }}
        </div>
    @endif
    {{-- Header --}}
    @if (session()->has('message'))
                <div class="alert alert-success mt-3">
                    {{ session('message') }}
                </div>
            @endif
    <header class="masthead mt-5">
      <div class="container">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6">
              <svg class="svgP" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 800 800" opacity="1"><defs><linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="nnneon-grad"><stop stop-color="hsl(37, 100%, 50%)" stop-opacity="1" offset="0%"></stop><stop stop-color="hsl(272, 99%, 54%)" stop-opacity="1" offset="100%"></stop></linearGradient><filter id="nnneon-filter" x="-100%" y="-100%" width="400%" height="400%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feGaussianBlur stdDeviation="17 8" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" edgeMode="none" result="blur"></feGaussianBlur></filter><filter id="nnneon-filter2" x="-100%" y="-100%" width="400%" height="400%" filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feGaussianBlur stdDeviation="10 17" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic" edgeMode="none" result="blur"></feGaussianBlur></filter></defs><g stroke-width="16" stroke="url(#nnneon-grad)" fill="none"><path d="M387.9911311454382 226.7996749462182C395.422219192641 222.51010699136873 404.577780807359 222.51010699136873 412.0088688545618 226.80087583310365L543.9911411137375 303.00075137595445C551.4222291609403 307.290319330804 556.0000099682993 315.2197754354711 556.0000099682993 323.80011223205554V476.19986331775715C556.0000099682993 484.7802001143416 551.4222291609403 492.7096562190088 543.9911411137375 497.00042506074374L412.0088688545618 573.2003006035945C404.577780807359 577.489868558444 395.422219192641 577.489868558444 387.9911311454382 573.199099716709L256.00885888626243 496.99922417385824C248.5777708390596 492.7096562190088 243.9999900317007 484.7802001143416 243.9999900317007 476.19986331775715V323.80011223205554C243.9999900317007 315.2197754354711 248.5777708390596 307.290319330804 256.00885888626243 302.99955048906907L387.9911311454382 226.7996749462182Z " filter="url(#nnneon-filter)"></path><path d="M399.9911311454382 226.7996749462182C407.422219192641 222.51010699136873 416.577780807359 222.51010699136873 424.0088688545618 226.80087583310365L555.9911411137375 303.00075137595445C563.4222291609403 307.290319330804 568.0000099682993 315.2197754354711 568.0000099682993 323.80011223205554V476.19986331775715C568.0000099682993 484.7802001143416 563.4222291609403 492.7096562190088 555.9911411137375 497.00042506074374L424.0088688545618 573.2003006035945C416.577780807359 577.489868558444 407.422219192641 577.489868558444 399.9911311454382 573.199099716709L268.00885888626243 496.99922417385824C260.5777708390596 492.7096562190088 255.9999900317007 484.7802001143416 255.9999900317007 476.19986331775715V323.80011223205554C255.9999900317007 315.2197754354711 260.5777708390596 307.290319330804 268.00885888626243 302.99955048906907L399.9911311454382 226.7996749462182Z " filter="url(#nnneon-filter2)" opacity="0.25"></path><path d="M375.9911311454382 226.7996749462182C383.422219192641 222.51010699136873 392.577780807359 222.51010699136873 400.0088688545618 226.80087583310365L531.9911411137375 303.00075137595445C539.4222291609403 307.290319330804 544.0000099682993 315.2197754354711 544.0000099682993 323.80011223205554V476.19986331775715C544.0000099682993 484.7802001143416 539.4222291609403 492.7096562190088 531.9911411137375 497.00042506074374L400.0088688545618 573.2003006035945C392.577780807359 577.489868558444 383.422219192641 577.489868558444 375.9911311454382 573.199099716709L244.00885888626243 496.99922417385824C236.5777708390596 492.7096562190088 231.9999900317007 484.7802001143416 231.9999900317007 476.19986331775715V323.80011223205554C231.9999900317007 315.2197754354711 236.5777708390596 307.290319330804 244.00885888626243 302.99955048906907L375.9911311454382 226.7996749462182Z " filter="url(#nnneon-filter2)" opacity="0.25"></path><path d="M387.9911311454382 226.7996749462182C395.422219192641 222.51010699136873 404.577780807359 222.51010699136873 412.0088688545618 226.80087583310365L543.9911411137375 303.00075137595445C551.4222291609403 307.290319330804 556.0000099682993 315.2197754354711 556.0000099682993 323.80011223205554V476.19986331775715C556.0000099682993 484.7802001143416 551.4222291609403 492.7096562190088 543.9911411137375 497.00042506074374L412.0088688545618 573.2003006035945C404.577780807359 577.489868558444 395.422219192641 577.489868558444 387.9911311454382 573.199099716709L256.00885888626243 496.99922417385824C248.5777708390596 492.7096562190088 243.9999900317007 484.7802001143416 243.9999900317007 476.19986331775715V323.80011223205554C243.9999900317007 315.2197754354711 248.5777708390596 307.290319330804 256.00885888626243 302.99955048906907L387.9911311454382 226.7996749462182Z "></path></g></svg>
              </div>
              <div class="col-12 col-md-6">
                <h1 class="fw-light">Sei alla ricerca di qualcosa di unico nel suo genere?</h1>
                <p class="lead">Su Presto.it troverai tutto cio' che fa al caso tuo!</p>
                <form class="d-flex" action="{{ route('announcements.search') }}" method="GET">
                  <input name="searched" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button type="submit" class="button-18">
                    <i class="fas fa-search"></i>
                  </button>
                </form>
              </div>
        </div>
      </div>
    </header>
   {{--  <div class="container">
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="box1"></div>
        </div>
        <div class="col-12 col-md-6">
          
        </div>
      </div>
    </div> --}}
    {{-- Fine Header --}}
    <h2 class="text-center mt-5 py-5">Articoli in evidenza</h2>
    @foreach ($announcements as $announcement)
    <div class="card mx-auto col-md-3 col-10 px-4 my-4">
      <img class='mx-auto img-thumbnail'
          src="https://picsum.photos/200/200"
          width="auto" height="auto">
          <div class="card-body  mx-auto">
            <div class='cvp'>
            <p class="card-text fs-6 mt-5"> User: {{ $announcement->user->name }}</p>
              <h5 class="card-title font-weight-bold">{{ $announcement->title }}</h5>
              <p class="card-text">€ {{ $announcement->price }}</p>
              {{-- <p class="card-text">Descrizione: {{ $announcement->body }}</p> --}}
              <button class="button-18 mt-2" role="button"><a href="{{ route('announcements.show', compact('announcement')) }}" class="button-18 text-white text-decoration-none">Visualizza</a></button><br />
              <button class="button-181 mt-2" role="button"><a href="{{ route('categories.show',['category'=>$announcement->category]) }}"class="text-white text-decoration-none ">Categoria: {{ $announcement->category->name }}</a></button>
              <p class="text-black text-decoration-none mb-1 p-3">Pubblicato il: {{ date_format($announcement->created_at, 'd/m/Y H:i')}}</p>
          </div>
      </div>
  </div>
    @endforeach
  </div>
</div>
<x-footer></x-footer>
</x-layout>


{{-- 
@foreach
Abbiamo inserito un @foreach per ciclare gli annunci e stamparli a schermo. Abbiamo impostato un masssimo di 6 annunci per la pagina welcome.

Date_format
Abbiamo utilizzato la funzione date_format per stampare la data di creazione dell'annuncio e l'ora di creazione.
  --}}