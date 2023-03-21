<?php

namespace App\Models;

use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 *
 * @parameter string $year
 * @parameter string $period
 * @parameter string $title
 * @parameter string $company
 * @parameter string $companyLink
 * @parameter string $companyLogo
 * @parameter string $content
 */
class Experience extends Model {
  use HasFactory;
  
  protected $fillable = [
    'year',
    'period',
    'title',
    'company',
    'companyLink',
    'companyLogo',
    'content',
  ];
}
