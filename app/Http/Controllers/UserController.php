<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function edit($id)
  {
      //Find the challenge
      $user = User::find($id);
      return view('edit-user',['user'=> $user]);
  }

  public function users()
  {
    $users = User::all();

    return view('users', compact('Users'));
  }


  public function update(Request $request, $id)
  {
    $user = User::find($id);

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->role = $request->input('role');

    $user->save(); //persist the data
    return redirect()->route('users')->with('info','user updated Successfully');
      //Retrieve the employee and update


  }
}
