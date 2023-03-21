<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @mixin Builder
 *
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $link
 * @property string $github
 *
 */
class Project extends Model {
  use HasFactory;
}
