<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class App extends Component {
  public bool $headerCondensed = false;
  public string|null $bgImage = null;
  
  /**
   * Create a new component instance.
   */
  public function __construct(bool $headerCondensed = false, $bgImage = null) {
    $this->headerCondensed = $headerCondensed;
    $this->bgImage         = $bgImage;
  }
  
  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string {
    return view('components.layout.app');
  }
}
