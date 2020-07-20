<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Mail;
use App\Admin\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
   public function login_form(){
        if(Auth::check()){
            redirect('user/home');
        }
        return view('admin.login');
    }

    public function login_user(Request $request){
        $postData = $request->all();
        DB::beginTransaction();
        try {
            
            $user = Admin::where('email', $postData['email'])->first();
            if($user){
                if ( !Hash::check($postData['password'], $user->password) ) {
                    return redirect('admin')->with('status', 'danger')->with('message', 'Enter correct password');
                } else {
                    $request->session()->put('admin', $user);
                    //Auth::loginUsingId($user->id);
                    return redirect('user/home');
                }
            } else {
                return redirect('admin')->with('status', 'danger')->with('message', 'Enter enter correct login credentials');
            }
        } catch ( \Exception $e ) {
            DB::rollback();
            //dd($e);
            //$request->session()->put('postedData', $postData);
            return redirect()->back()->with('status', 'danger')->with('message', $e->getMessage());
        }
    }

    public function password_reset_form(Request $request){
        $getData = $request->all();
        if(isset($getData['email']) && $getData['email'] != ''){
            $user = Admin::where('email', $getData['email'])->first();
            if(is_null($user)){
                return redirect('reset-password')->with('status', 'danger')->with('message', 'Email does not exist.');
            }
            $user->token = $getData['_token'];
            $user->save();
            $url = route('admin.newpassword', [$getData['_token']]);
            Mail::send('admin.email.password-reset', ['url' => $url], function ($m) use ($user) {
                
                $toEmail = $user->email;
                $m->from("info@idomusic.com", "iDoMusic")->replyTo('noreply@idomusic.com');
                
                
                $m->to($toEmail, $user->firstname)->subject('Password reset');
                
            }); 
            return redirect('reset-password')->with('status', 'success')->with('message', 'A email sent with password reset url');
        }
        return view('admin.reset-form');
    }
    public function new_password_form($token){
        $admin = Admin::where('token', $token)->first();
        if(is_null($admin)){
            return redirect('reset-password')->with('status', 'danger')->with('message', 'The password reset url is expired please enter email and get new one.');
        }
        return view('admin.new-password-from' );
    }
    public function user_logout(){
        Auth::logout();
        return redirect('admin');
    }
}

