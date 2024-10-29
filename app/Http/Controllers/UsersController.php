<?php

namespace App\Http\Controllers;

use App\Models\Users;

use Illuminate\Http\Request;

class UsersController extends Controller
{
   public function register()
   {
      $users = Users::all();

      return view ('users', compact('users'));
   }
}