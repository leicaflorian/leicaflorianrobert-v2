<?php

namespace App\Http\Livewire\Dialogs;

use App\Models\Project;
use Livewire\Component;

class ProjectUpsert extends Component {
  public Project $project;
  
  public function render() {
    return view('livewire.dialogs.project-upsert');
  }
}
