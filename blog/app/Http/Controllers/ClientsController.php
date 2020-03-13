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
}
