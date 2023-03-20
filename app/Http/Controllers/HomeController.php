<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
  function index() {
    return view('home');
  }
  
  public function about() {
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
    
    return view('about', compact('technologies'));
  }
}
