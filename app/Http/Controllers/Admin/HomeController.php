<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Genre;
use App\User;

class HomeController extends Controller
{
    public function user_home(){
    	$genres = Genre::get();
    	$artists = User::where('role_id', 1)->get();
    	$customers = User::where('role_id', 2)->get();
    	return view('admin.home', compact('genres', 'customers', 'artists'));
    }
}
