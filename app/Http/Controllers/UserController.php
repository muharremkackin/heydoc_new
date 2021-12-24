<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $request->all();
        $users = User::sortable()->with('roles')->paginate(10);
        return view('users.index', ['users' => $users]);
    }
}
