@extends('layouts.app')

@section('content')

  <main class="d-sm-flex flex-column">

    <!-- Search Section -->
    <section class="justify-content-around cs-search">
      {{-- @if (Route::has('login'))
        <div class="top-right links">
          @auth
            <a href="{{ url('/upr') }}">Home</a>
          @else
            <a href="{{ url('/apartments') }}">Mostra tutto</a>

            <a href="{{ route('login') }}">Login</a>

              @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
              @endif
          @endauth
        </div>
      @endif --}}
      <div class="container">

        <!-- Section title -->
        <div class="title text-center">
          <h1>Scopri alloggi nelle vicinanze tutti da vivere, per lavoro o svago. </h1>
        </div>
        <!-- End Section title -->

        <div class="search">
          <input type="search" id="address-input" placeholder="Where are we going?" />

          <script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>
                <script>
                  var placesAutocomplete = places({
                  appId: 'pl8NVK373KQV',
                  apiKey: '143cda61ad7e01f203a17b1d8aeba3bb',
                  container: document.querySelector('#address-input')
                  });
                </script>
        </div>
      </div>
    </section>
    <!-- End Search Section -->

    <!-- Sponsored Section -->
    <section class="cs-sponsored">

      <div class="container">

        <!-- Section title -->
        <div class="title text-center">
          <h3>Appartamenti in evidenza</h3>
        </div>
        <!-- End Section title -->

        <!-- Apartments Container -->
        <div class="container d-xs-flex flex-column cs-apartments-container">

          {{-- First Row --}}
          <div class="row justify-content-center justify-content-sm-between">

            <!-- Single apartment-->
            <div class="card my-3" style="width: 18rem;">
              <!-- Apartment Img -->
              <img class="card-img-top" src="" alt="Apartment image">
              <!-- Apartment Text -->
              <div class="card-body d-flex flex-column">
                <h5 class="card-title text-center">Apartment title</h5>
                <p class="card-text">Apartment Description</p>
                <p class="card-text">Apartment Location</p>
                <a href="#" class="btn cs-btn align-self-center">SCOPRI</a>
              </div>
            </div>
            <!-- End Single apartment-->

            <!-- Single apartment-->
            <div class="card my-3" style="width: 18rem;">
              <!-- Apartment Img -->
              <img class="card-img-top" src="" alt="Apartment image">
              <!-- Apartment Text -->
              <div class="card-body d-flex flex-column">
                <h5 class="card-title text-center">Apartment title</h5>
                <p class="card-text">Apartment Description</p>
                <p class="card-text">Apartment Location</p>
                <a href="#" class="btn cs-btn align-self-center">SCOPRI</a>
              </div>
            </div>
            <!-- End Single apartment-->

            <!-- Single apartment-->
            <div class="card my-3" style="width: 18rem;">
              <!-- Apartment Img -->
              <img class="card-img-top" src="" alt="Apartment image">
              <!-- Apartment Text -->
              <div class="card-body d-flex flex-column">
                <h5 class="card-title text-center">Apartment title</h5>
                <p class="card-text">Apartment Description</p>
                <p class="card-text">Apartment Location</p>
                <a href="#" class="btn cs-btn align-self-center">SCOPRI</a>
              </div>
            </div>
            <!-- End Single apartment-->

          </div>

          {{-- Second  Row --}}
          <div class="row justify-content-sm-between">

          </div>


        </div>
        <!-- End Apartments Container -->

      </div>

    </section>
    <!-- End Sponsored Section -->

  </main>

@endsection
{{-- </html> --}}
