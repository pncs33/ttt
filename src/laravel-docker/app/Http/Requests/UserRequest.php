<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\Models\User;

class UserRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */


  public function rules()
  {
    $rules = [
      'telno' => 'required',

    ];
    // dd(User::where('telno', $this->telno)->first()->id);
    if (false) {
      $rules['telno'] = 'max:10';
  }
    return $rules;


  }


}
