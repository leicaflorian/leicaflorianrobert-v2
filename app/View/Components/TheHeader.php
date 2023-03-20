<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TheHeader extends Component {
  public bool $condensed = false;
  public string|null $pageTitle = null;
  
  /**
   * Create a new component instance.
   */
  public function __construct($condensed = false, $pageTitle = null) {
    $this->condensed = $condensed;
    $this->pageTitle = $pageTitle;
  }
  
  /**
   * Get the view / contents that represent the component.
   */
  public
  function render(): View|Closure|string {
    return view('components.the-header');
  }
}
