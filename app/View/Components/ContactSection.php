<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactSection extends Component {
  public string $subtitle = "Non esitare,";
  public string $title = "Fatti sentire!";
  public string $text = "";
  
  /**
   * Create a new component instance.
   */
  public function __construct($title = null, $subtitle = null, $text = null) {
    $this->title    = $title ?? $this->title;
    $this->subtitle = $subtitle ?? $this->subtitle;
    $this->text     = $text ?? $this->text;
  }
  
  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string {
    return view('components.contact-section');
  }
}
