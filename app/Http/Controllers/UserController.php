<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{

    public function list_users(){
        $users = User::where('role_id', 2)->get();
        return view('user.list', compact('users'));
    }

    public function list_artists(){
        $users = User::where('role_id', 1)->get();
        return view('user.artist-list', compact('users'));
    }
    
}
