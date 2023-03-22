<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\View\View;

trait FragmentQuery {
  public function view(Request $request, $viewName, $data = null): array|View {
    $fragment = $request->has("fragment");
    $toReturn = view($viewName, $data ?? []);
    
    if ($fragment) {
      $toReturn = [
        "pageTitle" => trim(strip_tags($toReturn->fragment("pageTitle"))),
        "header"    => $toReturn->fragment("header"),
        "main"      => $toReturn->fragment("main"),
      ];
    }
    
    return $toReturn;
  }
}
