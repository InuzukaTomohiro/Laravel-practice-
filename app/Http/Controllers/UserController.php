<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserRegistEdit;
use App\Repositories\User\UserEloquentRepository;

class UserController extends Controller
{
  protected $userRepository;

  public function __construct(UserEloquentRepository $userRepository )
  {
    $this->userRepository = $userRepository;
  }
  
  public function index()
  {
    $users = $this->userRepository->all();

    return view('user.index', compact('users'));
  }

  public function show($id)
  {
    $user = $this->userRepository->find($id);

    return view('user.show', compact('user'));
  }

  public function edit($id)
  {
    $user = $this->userRepository->find($id);
    $users = $this->userRepository->all();
    $currentUser = $this->userRepository->currentUser();
    
    if ($user != $currentUser) {
      $flash = "指定のURLはアクセスできません。";
      return view('user.index', compact('flash', 'users'));
    }
  
    return view('user.edit', compact('user'));
  }

  public function update(UserRegistEdit $request, $id)
  {
    $user = $this->userRepository->find($id);

    $user->name = $request->name;
    $user->email = $request->email;
    $user->update();

    return view('user.show', compact('user'));
  }
}