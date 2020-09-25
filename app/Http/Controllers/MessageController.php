<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apartment;
use App\Message;

class MessageController extends Controller
{
  public function store(Request $request)
  {

      $newMessage = new Message();
      $newMessage->email = $request['email'];
      $newMessage->content = $request['content'];
      $newMessage->apartment_id = $request['apartment_id'];
      $newMessage->save();

      return redirect()->route('apartments.index');
  }
}
