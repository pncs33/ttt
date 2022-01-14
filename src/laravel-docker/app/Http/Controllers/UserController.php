<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function store(UserRequest $request)
  {

    // dd($request);
    $user = User::create([
      'telno' => $request->telno,

    ]);

    return view('index');
  }
}
