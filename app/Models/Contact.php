<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
