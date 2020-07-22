<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Country;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $titles = ['Mr' , 'Mrs' , 'Miss', 'Ms', 'Dr'] ;
        $countries = Country::get(['id','name']);
        $roles = Role::get(['name', 'id']);

        return view('auth.register' , compact('titles', 'countries' , 'roles'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => [ 'string', 'max:255'],
            'street' => ['required', 'string', 'max:255'],
            'city' => [ 'required' , 'string', 'max:255'],
            'postcode' => ['required', 'string', 'max:255'],
            'country_id' => ['required', 'integer'],
            'role_id' => ['required', 'integer'],           
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //find the role by id
        $role = Role::findOrFail($data['role_id']); // select name="role_id" 
        // $request->role_id or $request->get('role_id') is the same thing.

        $user =  User::create([
            'title' =>  isset($data['title']) ?  $data['title'] : '',
            'first_name' =>  isset($data['first_name']) ?  $data['first_name'] : '',
            'last_name' =>  isset($data['last_name']) ? $data['last_name'] : '',
            'street' =>  isset($data['street']) ? $data['street'] : '',
            'city' =>  isset($data['city']) ? $data['city'] : '',
            'country_id' =>  isset($data['country_id']) ? $data['country_id'] : '',
            'postcode' =>  isset($data['postcode']) ? $data['postcode'] : '',
            'phone'  =>  isset($data['phone']) ? $data['phone'] : '',
            'mobile'  =>  isset($data['mobile']) ? $data['mobile'] : '',
            'role_id' => isset($data['role_id']) ? $data['role_id'] : '',
            'email'  =>  isset($data['email']) ? $data['email'] : '',
            'password'  =>  Hash::make($data['password'])
        ]);
        $user->assignRole($role);
        return $user;
    }
}
