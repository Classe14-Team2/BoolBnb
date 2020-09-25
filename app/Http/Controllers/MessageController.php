<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;
use App\Message;

class MessageController extends Controller
{
  public function store(Request $request)
  {
      $apartments = Apartment::all();
      $newMessage = new Message();
      $newMessage->email = $request['email'];
      $newMessage->content = $request['content'];
      $newMessage->save();

      dd($request['content']);
      return view('index', compact('apartments'));
  }
}
