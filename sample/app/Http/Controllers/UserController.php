<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('lname')->get();
        return view('users.index', ['users'=>$users]);
    }
}
