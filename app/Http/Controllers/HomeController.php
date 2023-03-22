<?php

namespace App\Http\Controllers;

use App\Traits\FragmentQuery;
use Illuminate\Http\Request;

class HomeController extends Controller {
  use FragmentQuery;
  
  function index(Request $request) {
    return $this->view($request, "home");
  }
  
  public function about(Request $request) {
    $technologies = [
      "HTML5",
      "CSS3 / SASS",
      "JavaScript",
      "TypeScript",
      "jQuery",
      "Vue.js / Nuxt.js",
      "Node.js",
      "Nest.js",
      "NativeScript",
      "Ionic",
      "Webpack / Vite",
      "PHP",
      "Laravel",
      "MongoDB / MySQL",
      "Docker",
    ];
    
    return $this->view($request, 'about', compact('technologies'));
  }
}
