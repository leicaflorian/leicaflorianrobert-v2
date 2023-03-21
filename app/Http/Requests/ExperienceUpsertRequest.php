<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExperienceUpsertRequest extends FormRequest {
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool {
    return true;
  }
  
  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
   */
  public function rules(): array {
    return [
      'year'        => 'required|integer|min:2000|max:2100',
      'period'      => 'required|string',
      'title'       => 'required|string|max:255',
      'company'     => 'required|string|max:255',
      'companyLink' => 'nullable|url|max:255',
      'companyLogo' => 'nullable|image',
      'content'     => 'required|string',
    ];
  }
}
