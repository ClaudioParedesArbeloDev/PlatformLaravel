<?php

namespace App\Http\Controllers;

use App\Models\Users;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

use function Laravel\Prompts\password;

class UsersController extends Controller
{
   public function index()
   {
      $users = Users::orderBy('lastname', 'asc')->get();

      
      return view ('users.users', compact('users'));
   }

   public function create()
   {
      return view ('users.create');
   }

   public function store(Request $request)
   {
      $user = new Users();

      $user->name=$request->name;
      $user->lastname=$request->lastname;
      $user->address=$request->address;
      $user->phone=$request->phone;
      $user->email=$request->email;
      $user->dni=$request->dni;
      $user->date_birth=$request->date_birth;
      $user->username=$request->username;
      $user->password = Hash::make($request->password);

      $user->save();

      return redirect('/users');
   }

   public function show($id)
   {
      $user = Users::find($id);

      return view('users.user', compact('user'));
   }
}