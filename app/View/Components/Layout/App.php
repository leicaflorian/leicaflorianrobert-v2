<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class App extends Component {
  public bool $headerCondensed = false;
  
  /**
   * Create a new component instance.
   */
  public function __construct(bool $headerCondensed = false) {
    $this->headerCondensed = $headerCondensed;
  }
  
  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string {
    return view('components.layout.app');
  }
}
