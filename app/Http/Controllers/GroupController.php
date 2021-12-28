<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index() {
        $groups = Group::with('created_by')->paginate(10);

//        dd($groups);
        return view('groups.index', ['groups' => $groups]);
    }
}
