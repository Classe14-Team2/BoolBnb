<?php

namespace App\Http\Controllers\Upr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Apartment;
use App\User;
use App\Message;

class MessageController extends Controller
{
  public function index()
  {
    $messages = Message::all();
    $apartments = Apartment::all();
    $user = Auth::user();

    return view('upr.messages', compact('messages', 'apartments', 'user'));

  }
}
