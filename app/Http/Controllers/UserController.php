<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index() {

        $users = User::paginate(5);

        return view('users.index', ['users' => $users]);
    
    }

    public function update($id) {
        $user = User::find($id);

        return view('users.update', ['user' => $user]);
        // dd($user);
    }

    public function insert(Request $request)
    {
        $user = User::find($request->id);

        $user->name = $request->name;
        $user->email = $request->email;
        // $user->password = bcrypt($request->password); //"password"

        $user->save();

        return redirect()->back()->with('success', 'User details were updated successfully.');
    }
}
