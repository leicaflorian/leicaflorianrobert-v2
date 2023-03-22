<?php

namespace App\Http\Controllers;

use App\Traits\FragmentQuery;
use Illuminate\Http\Request;

class ProjectController extends Controller {
  use FragmentQuery;
  
  public function index(Request $request) {
    return $this->view($request, 'projects');
  }
}
