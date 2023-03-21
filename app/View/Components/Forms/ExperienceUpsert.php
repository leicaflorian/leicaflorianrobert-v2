<?php

namespace App\View\Components\Forms;

use App\Models\Experience;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ExperienceUpsert extends Component {
  /**
   * @var Experience
   */
  public Experience $experience;
  /**
   * @var bool
   */
  public bool $update;
  
  /**
   * Create a new component instance.
   */
  public function __construct($experience = null, $update = false) {
    $this->experience = $experience ?? new Experience();
    $this->update     = $update;
  }
  
  
  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string {
    return view('components.forms.experience-upsert');
  }
}
