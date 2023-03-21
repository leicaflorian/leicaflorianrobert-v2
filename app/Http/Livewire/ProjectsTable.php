<?php

namespace App\Http\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectsTable extends Component {
  public Project $activeProject;
  
  public $listeners = [
    "showClick" => "selectProject"
  ];
  
  public function render() {
    $projects = Project::orderBy('date', "desc")->get();
    
    return view('livewire.projects-table', compact("projects"));
  }
  
  public function selectProject($id) {
    $this->activeProject = Project::find($id);
  }
}
