<?php

namespace App\Http\Controllers\Upr;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Apartment;
use App\User;
use App\Service;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::all();
        $user = Auth::user();

        return view('upr.index', compact('apartments', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $apartments = Apartment::all();
      $services = Service::all();

      return view('upr.create', compact('apartments', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::check()) {
          abort('404');
        }

        // Validazione
        $request->validate($this->validationData());

        $request_data = $request->all();
        // dd($request_data);



        // Nuova istanza Appartamento
        $newApartment = new Apartment();
        $newApartment->user_id = Auth::id();
        $newApartment->fill($request_data);

        // dd($newApartment->user_id);
        $newApartment->save();


        if (isset($request_data['services'])) {
          $newApartment->services()->sync($request_data['services']);
        }


        if (isset($request_data['image'])) {
          $path = $request->file('image')->store('images', 'public');
          $newApartment->image = $path;
        }



        // Mail::to($new_post->user->email)->send(new PostCreatedMail());

        return redirect()->route('upr.apartments.show', $newApartment);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
      $users = User::all();
      $services = Service::all();
      return view('upr.show', compact('apartment', 'users', 'services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
      $services = Service::all();

      return view('upr.edit', compact('apartment', 'services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apartment $apartment)
    {
      if (!Auth::check()) {
      abort('404');
    }

    // Validazione
    $request->validate($this->validationData());

    $request_data = $request->all();

    if (isset($request_data['services'])) {
      $apartment->services()->sync($request_data['services']);
    } else {
      $apartment->services()->detach();
    }


    if (isset($request_data['image'])) {
      $path = $request->file('image')->store('images', 'public');
      $apartment->image = $path;
    } else {
      $apartment->image = '';
    }

    $apartment->update();

    // Mail::to($post->user->email)->send(new PostEditedMail());

    return redirect()->route('upr.apartments.show', $apartment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function validationData() {
       return [
         'title' => 'required|max:255',
         'content' => 'max:1000',
         'rooms' => 'required|min:1|max:10',
         'beds' => 'required|min:1|max:10',
         'baths' => 'required|min:1|max:5',
         'square_meters' => 'required|numeric|min:50|max:350',
         'address' => 'required|max:300',
         'image' => 'image',
       ];
     }
}
