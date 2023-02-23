<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRegistEdit;

class UserController extends Controller
{
  public function show($id)
  {
    $user = User::find($id);

    return view('user.show', compact('user'));
  }

  public function edit($id)
  {
    $user = User::find($id);

    return view('user.edit', compact('user'));
  }

  public function update(UserRegistEdit $request, $id)
  {
    $user = User::find($id);

    $user->name = $request->name;
    $user->email = $request->email;
    $user->update();

    return view('user.show', compact('user'));
  }
}