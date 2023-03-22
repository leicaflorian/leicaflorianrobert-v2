<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller {
  public function store(Request $request) {
    $data = $request->validate([
      'name'    => 'required:max:255',
      'email'   => 'required|email',
      'message' => 'required'
    ]);
    
    throw new \Exception('Something went wrong');
    Contact::create($data);
    
    return response()->json([
      'message' => 'Thanks for contacting us!'
    ], 202);
  }
}
