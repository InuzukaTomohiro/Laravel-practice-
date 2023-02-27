<?php

namespace App\Repositories\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserEloquentRepository 
{
  public function currentUser()
  {
    return Auth::user();
  }

  public function find($id)
  {
    return User::findOrFail($id);
  }

  public function all()
  {
    return User::all();
  }
}