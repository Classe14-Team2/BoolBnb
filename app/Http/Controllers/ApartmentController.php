<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;
use App\User;

class ApartmentController extends Controller
{
  public function index()
  {
      $apartments = Apartment::all();
      return view('index', compact('apartments'));
  }

  public function show(Apartment $apartment) {
      $users = User::all();
      return view('show', compact('apartment', 'users'));
    }
}
