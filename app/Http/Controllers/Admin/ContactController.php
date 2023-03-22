<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller {
  /**
   * Display a listing of the resource.
   *
   * @return View
   */
  public function index(): View {
    $contacts = Contact::all();
    
    return view('admin.contacts.index', compact("contacts"));
  }
  
  /**
   * Show the form for creating a new resource.
   *
   * @return View
   */
  public function create(): View {
    
    return view('admin.contacts.create', []);
  }
  
  /**
   * Store a newly created resource in storage.
   *
   * @param  Request  $request
   *
   * @return RedirectResponse
   */
  public function store(Request $request): RedirectResponse {
    $data = $request->all();
    $contact = Contact::create($data);
    
    return redirect()->route('admin.contacts.show', $contact->id);
  }
  
  /**
   * Display the specified resource.
   *
   * @param Contact $contact
   *
   * @return View
   */
  public function show(Contact $contact): View {
    return view('admin.contacts.show', compact("contact"));
  }
  
  /**
   * Show the form for editing the specified resource.
   *
   * @param  Contact  $contact
   *
   * @return View
   */
  public function edit(Contact $contact): View {
    
    return view('admin.contacts.edit', [
      "contact" => $contact,
      
    ]);
  }
  
  /**
   * Update the specified resource in storage.
   *
   * @param  Request $request
   * @param  Contact $contact
   *
   * @return RedirectResponse
   */
  public function update(Request $request, Contact $contact): RedirectResponse {
    $data = $request->all();
    
    $contact->update($data);
    
    return redirect()->route('admin.contacts.show', $contact->id);
  }
  
  /**
   * Remove the specified resource from storage.
   *
   * @param  Contact  $contact
   *
   * @return RedirectResponse
   */
  public function destroy(Contact $contact): RedirectResponse {
    $contact->destroy();
    
    return redirect()->route('admin.contacts.index');
  }
}
