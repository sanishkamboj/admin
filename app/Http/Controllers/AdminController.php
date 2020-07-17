<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
   public function login_form(){
        if(Auth::check()){
            redirect('user/home');
        }
        return view('login');
    }

    public function login_user(Request $request){
        $postData = $request->all();
        DB::beginTransaction();
        try {
            
            $user = Admin::where('email', $postData['email'])->first();
            if($user){
                if ( !Hash::check($postData['password'], $user->password) ) {
                    return redirect('login')->with('status', 'danger')->with('message', 'Enter correct password');
                } else {
                    Auth::loginUsingId($user->id);
                    return redirect('user/home');
                }
            } else {
                return redirect('login')->with('status', 'danger')->with('message', 'Enter enter correct login credentials');
            }
        } catch ( \Exception $e ) {
            DB::rollback();
            //dd($e);
            //$request->session()->put('postedData', $postData);
            return redirect()->back()->with('status', 'danger')->with('message', $e->getMessage());
        }
    }

    public function password_reset_form(){
        return view('reset-form');
    }
    public function user_logout(){
        Auth::logout();
        return redirect('login');
    }
}
