<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ClientsController extends Controller
{
  //
  public function index() {
    $clients = App\Clients::all();

    return view('ClientList', compact('clients'));
  }

  //
  public function view($id) {
    //si no encuentra registro redirecciona a un 404
    $client = App\Clients::FindOrFail($id);

    return view('ClientView', compact('client'));
  }

  //
  public function create(Request $request) {

    $request->validate([
      'name' => 'required',
      'last_name' => 'required'
    ]);

    //return $request->all();
    $clientNew = new App\Clients;
    $clientNew->name = $request->name;
    $clientNew->last_name = $request->last_name;
    $clientNew->last_name = $request->last_name;
    $clientNew->email = $request->email;
    $clientNew->phone = $request->phone;
    $clientNew->location = $request->location;
    $clientNew->type_client = $request->type_client;
    $clientNew->status = $request->status;
    $clientNew->rif = $request->rif;
    $clientNew->save();

    return back()->with('mensaje', 'Clients add...');
  }
}
