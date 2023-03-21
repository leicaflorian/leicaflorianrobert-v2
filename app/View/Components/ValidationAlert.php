<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ValidationAlert extends Component {
  public $errors;
  public $icon;
  
  /**
   * Create a new component instance.
   */
  public function __construct($errors, $icon = null) {
    $this->errors = $errors;
    $this->icon   = $icon;
  }
  
  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string {
    return view('components.validation-alert');
  }
}
