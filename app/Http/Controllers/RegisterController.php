<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use App\Http\Requests\UserRegistPost;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function create()
  {
    return view('regist.register');
  }

  public function store(UserRegistPost $request)
  {
    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    event(new Registered($user));

    return view('regist.complete', compact('user'));
  }
}