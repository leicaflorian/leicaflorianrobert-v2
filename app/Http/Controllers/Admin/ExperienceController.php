<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests\ExperienceUpsertRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Experience;

class ExperienceController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return View
   */
  public function index(): View {
    $experiences = Experience::orderBy("year", "desc")->get();
    
    return view('admin.experiences.index', compact("experiences"));
  }
  
  /**
   * Show the form for creating a new resource.
   *
   * @return View
   */
  public function create(): View {
    
    return view('admin.experiences.create', []);
  }
  
  /**
   * Store a newly created resource in storage.
   *
   * @param  ExperienceUpsertRequest  $request
   *
   * @return RedirectResponse
   */
  public function store(ExperienceUpsertRequest $request): RedirectResponse {
    $data = $request->validated();
    
    if ($request->hasFile('companyLogo')) {
      $data['companyLogo'] = $request->file('companyLogo')->store('experiences');
    }
    
    $experience = Experience::create($data);
    
    return redirect()->route('admin.experiences.index');
  }
  
  /**
   * Display the specified resource.
   *
   * @param  Experience  $experience
   *
   * @return View
   */
  public function show(Experience $experience): View {
    return view('admin.experiences.show', compact("experience"));
  }
  
  /**
   * Show the form for editing the specified resource.
   *
   * @param  Experience  $experience
   *
   * @return View
   */
  public function edit(Experience $experience): View {
    
    return view('admin.experiences.edit', [
      "experience" => $experience,
    
    ]);
  }
  
  /**
   * Update the specified resource in storage.
   *
   * @param  ExperienceUpsertRequest  $request
   * @param  Experience               $experience
   *
   * @return RedirectResponse
   */
  public function update(ExperienceUpsertRequest $request, Experience $experience): RedirectResponse {
    $data = $request->validated();
    
    if ($request->hasFile('companyLogo')) {
      $data['companyLogo'] = $request->file('companyLogo')->store('experiences');
      
      // remove old image
      if ($experience->companyLogo) {
        Storage::delete($experience->companyLogo);
      }
    }
    
    $experience->update($data);
    
    return redirect()->route('admin.experiences.index');
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  Experience  $experience
   *
   * @return RedirectResponse
   */
  public function destroy(Experience $experience): RedirectResponse {
    $experience->delete();
  
    // first remove the related image
    if ($experience->companyLogo) {
      Storage::delete($experience->companyLogo);
    }
  
    return redirect()->route('admin.experiences.index');
  }
}
