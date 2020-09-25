@extends('layouts.app');

@section('content')

  <h1>Appartamento {{ $apartment->id }}</h1>

  <div class="">
    <ul>
      <li><h3>Titolo:</h3>{{ $apartment->title }}</li>
      <li><h3>Descrizione:</h3>{{ $apartment->description }}</li>
      <li><h3>Stanze:</h3>{{ $apartment->rooms }}</li>
      <li><h3>Letti:</h3>{{ $apartment->beds }}</li>
      <li><h3>Bagni:</h3>{{ $apartment->baths }}</li>
      <li><h3>Mq:</h3>{{ $apartment->square_meters }}</li>
      <li><h3>Indirizzo:</h3>{{ $apartment->address }}</li>
      <li><h3>Latitudine:</h3>{{ $apartment->lat }}</li>
      <li><h3>Longitudine:</h3>{{ $apartment->lon }}</li>
      <li><h3>Prezzo:</h3>{{ $apartment->price }} €</li>
      <li><img src=" {{ asset('storage') . '/' . $apartment->image }} " alt="{{$apartment->title}}"></li>
      <li><h3>Proprietario:</h3>{{ $apartment->user->name }}</li>
      <li><h3>Città:</h3>{{ $apartment->city }}</li>
      <li><h3>Stato:</h3>{{ $apartment->country }}</li>
    </ul>
  </div>

  <div class="">

    <input type="email" name="email"

    value=
      "@if ($user_auth !== null)
        {{$user_auth->email}}
      @endif"

    placeholder="Inserisci la tua mail">

    <textarea name="name" rows="8" cols="80" placeholder="Inserisci il messaggio"></textarea>
  </div>

  <a href="{{ route('apartments.index') }}">Torna alla lista</a>

@endsection
