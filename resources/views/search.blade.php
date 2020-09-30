@extends('layouts.app')

@section('content')

  <div class="content">
      <div class="title m-b-md">
          HOME PAGE CON L INPUT DI RICERCA
          <div class="">
            <input type="search" id="address" class="form-control" placeholder="Where are we going?" />
              <button onclick="cerca()">Cerca</button>
          </div>
      </div>
  </div>

{{-- JS --}}

  <script src="https://cdn.jsdelivr.net/npm/places.js@1.19.0"></script>

  <script>
    function cerca() {
      var getInput = document.querySelector('#address').value;
      //console.log(getInput);
    }

    (function() {
      var placesAutocomplete = places({
      appId: 'pl72UD0E1RWC',
      apiKey: '6f2ccdf8214af2f289be15103d07cf1c',
      container: document.querySelector('#address')
    });
    })();

    localStorage.getItem("storageName");

    var place = document.querySelector('#address').value = localStorage.getItem("storageName");

    console.log(place);

  </script>

@endsection
