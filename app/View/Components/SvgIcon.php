<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SvgIcon extends Component {
  public string $name;
  
  /**
   * Create a new component instance.
   */
  public function __construct($icon) {
    $this->name = $icon;
  }
  
  /**
   * Get the view / contents that represent the component.
   *
   * @return View
   */
  public function render(): View {
    $fileContent = file_get_contents(public_path('img/' . $this->name . '.svg'));
    
    return view('components.svg-icon', [
      'fileContent' => $fileContent
    ]);
  }
  
}
