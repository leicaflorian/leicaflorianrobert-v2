<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceivedAdmin;
use App\Mail\ContactSentUser;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller {
  public function store(Request $request) {
    $data = $request->validate([
      'name'                 => 'required:max:255',
      'email'                => 'required|email',
      'message'              => 'required',
      "g-recaptcha-response" => "required"
    ]);
    
    // test recaptcha
    $recaptchaResult = Http::asForm()->post("https://www.google.com/recaptcha/api/siteverify", [
      "secret"   => env("RECAPTCHA_KEY_PRIVATE"),
      "response" => $data["g-recaptcha-response"],
    ]);
    
    // check recaptcha and ensure score is above 0.5
    if ($recaptchaResult->failed()
      || $recaptchaResult->json()["success"] === false
      || ($recaptchaResult->json()["score"] ?? 0) < 0.5
    ) {
      return response()->json([
        'message' => 'Verifica recaptcha fallita. Ti invitiamo a riprovare.',
        "result" => $recaptchaResult->json()
      ], 400);
    }
    
    Contact::create($data);
    
    return response()->json([
      'message' => 'Thanks for contacting us!'
    ], 202);
  }
}
