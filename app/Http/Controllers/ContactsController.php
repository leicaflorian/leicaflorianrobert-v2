<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceivedAdmin;
use App\Mail\ContactSentUser;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller {
  public function store(Request $request) {
    $data = $request->validate([
      'name'    => 'required:max:255',
      'email'   => 'required|email',
      'message' => 'required'
    ]);
    
    Contact::create($data);
    
    return response()->json([
      'message' => 'Thanks for contacting us!'
    ], 202);
  }
}
