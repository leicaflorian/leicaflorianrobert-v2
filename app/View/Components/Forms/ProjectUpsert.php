<?php

namespace App\View\Components\Forms;

use App\Models\Project;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectUpsert extends Component {
  public Project $project;
  /**
   * @var bool
   */
  public bool $update;
  
  /**
   * Create a new component instance.
   */
  public function __construct($project = null, $update = false) {
    $this->project = $project ?? new Project();
    $this->update  = $update;
  }
  
  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string {
    return view('components.forms.project-upsert');
  }
}
