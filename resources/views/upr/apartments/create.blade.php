@extends('layouts.app')

@section('content')

  <h1>Add apartment</h1>
  {{-- Validazione form --}}
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  {{-- Add new car form --}}
  <form action="{{route('upr.apartments.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('POST')

    <div>
      <label for="title">Title:</label><br>
      <input type="text" name="title" value="{{ old('title')}}" placeholder="Inserisci il titolo">
    </div>

    <div>
      <label for="description">Description:</label><br>
      <textarea name="description" rows="8" cols="80" placeholder="Inserisci la descrizione">{{ old('description')}}</textarea>
    </div>

    <div>
      <label for="rooms">Rooms:</label><br>
      <input type="number" name="rooms" value="{{ old('rooms')}}" placeholder="Inserisci il numero di stanze">
    </div>

    <div>
      <label for="beds">Beds:</label><br>
      <input type="number" name="beds" value="{{ old('beds')}}" placeholder="Inserisci il numero di letti">
    </div>

    <div>
      <label for="baths">Baths:</label><br>
      <input type="number" name="baths" value="{{ old('baths')}}" placeholder="Inserisci il numero di bagni">
    </div>

    <div>
      <label for="square_meters">Square meters:</label><br>
      <input type="number" name="square_meters" value="{{ old('square_meters')}}" placeholder="Inserisci i mq">
    </div>

    <div>
      <label for="address">Address:</label><br>
      <input type="text" name="address" value="{{ old('address')}}" placeholder="Inserisci l'indirizzo">
    </div>

    <div class="chekboxes">
      <span>Services:</span>
      @foreach ($services as $service)
        <div>
          <input type="checkbox" name="services[]" value="{{ $service->id }}">
          <label>{{$service->type}}</label>
        </div>
      @endforeach
    </div>

    <div>
      <label for="image">Upload image</label>
      <input type="file" name="image" accept="image/*" required>
    </div>

    <div>
      <input type="submit" name="" value="save">
    </div>
  </form>

  <a href="{{ route('upr.apartments.index') }}">Torna alla lista</a>

@endsection
