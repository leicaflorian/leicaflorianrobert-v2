<?php

namespace App\Models;

use App\Mail\ContactReceivedAdmin;
use App\Mail\ContactSentUser;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

/**
 * @mixin Builder
 *
 * @property string $name
 * @property string $email
 * @property string $message
 */
class Contact extends Model {
  use HasFactory;
  
  protected $fillable = [
    'name',
    'email',
    'message'
  ];
  
  protected static function booted(): void {
    static::created(function (Contact $contact) {
      $adminUser = User::first();
      
      Mail::to($contact->email)->queue(new ContactSentUser($contact));
      Mail::to($adminUser->email)->queue(new ContactReceivedAdmin($contact, $adminUser));
    });
  }
}
