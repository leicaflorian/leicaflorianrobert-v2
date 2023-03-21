<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpsertProjectRequest;
use App\Models\Project;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class ProjectController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return View
   */
  public function index(): View {
    $projects = Project::orderBy("date", "desc")->get();
    
    return view('admin.projects.index', compact("projects"));
  }
  
  /**
   * Show the form for creating a new resource.
   *
   * @return View
   */
  public function create(): View {
    return view('admin.projects.create', []);
  }
  
  /**
   * Store a newly created resource in storage.
   *
   * @param  UpsertProjectRequest  $request
   *
   * @return RedirectResponse
   */
  public function store(UpsertProjectRequest $request): RedirectResponse {
    $data = $request->validated();
    
    $image = $request->file('image');
    
    if ($image) {
      $path          = $image->store('public/projects');
      $data['image'] = $path;
    }
    
    $project = Project::create($data);
    
    return redirect()->route('admin.projects.index');
  }
  
  /**
   * Display the specified resource.
   *
   * @param  Project  $project
   *
   * @return View
   */
  public function show(Project $project): View {
    return view('admin.projects.show', compact("project"));
  }
  
  /**
   * Show the form for editing the specified resource.
   *
   * @param  Project  $project
   *
   * @return View
   */
  public function edit(Project $project): View {
    
    return view('admin.projects.edit', [
      "project" => $project,
    
    ]);
  }
  
  /**
   * Update the specified resource in storage.
   *
   * @param  UpsertProjectRequest  $request
   * @param  Project               $project
   *
   * @return RedirectResponse
   */
  public function update(UpsertProjectRequest $request, Project $project): RedirectResponse {
    $data  = $request->validated();
    $image = $request->file('image');
    
    if ($image) {
      $path          = $image->store('projects');
      $data['image'] = $path;
      
      // remove old image
      if ($project->image) {
        Storage::delete($project->image);
      }
    }
    
    $project->update($data);
    
    return redirect()->route('admin.projects.index');
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  Project  $project
   *
   * @return RedirectResponse
   */
  public function destroy(Project $project): RedirectResponse {
    $project->destroy();
    
    return redirect()->route('admin.projects.index');
  }
}
