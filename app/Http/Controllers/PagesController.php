<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('layouts.app');
    }

    public function showAllUsers()
    {
        $users = User::all();
        $name = "Nikola";

        //return abort(404);
        return view('users.index', compact('users', 'name'));
    }

    public function showOneUser($id)
    {
        $user = User::find($id);

        return view('users.single', compact('user'));
    }
}
