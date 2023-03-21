<?php

namespace App\View\Components;

use App\Models\Experience;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class ExperiencesSlider extends Component {
  public Collection $workExperiences;
  public array $years;
  
  /**
   * Create a new component instance.
   */
  public function __construct() {
    $experiences           = Experience::orderBy('year', 'desc')->get();
    $this->workExperiences = $experiences->groupBy('year');
    
    $years    = $this->workExperiences->keys()->sort();
    $allYears = [];
    
    for ($i = intval($years->first()); $i <= now()->year; $i++) {
      $allYears[] = [
        "num"   => $i,
        "empty" => !$this->workExperiences->get($i),
        "last"  => $years->last() == $i,
      ];
    }
    
    $this->years = $allYears;
  }
  
  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string {
    return view('components.experiences-slider');
  }
}
