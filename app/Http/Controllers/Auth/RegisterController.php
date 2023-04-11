<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\LogActivity;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use  Illuminate\Support\Str;

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
//        $this->middleware('guest');
           $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function register(Request $request)
    {
        $role = $request->input('role');

        $validate = Validator::make($request->all(), [
            'name' => 'required|min:5',
            'email' => 'required|unique:users',
            'jobtitle' => 'required',
            'phone' => 'required',
        ]);
        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();
        }
        else{
             User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => Hash::make(Str::random(32)),
                'jobTitle'=>$request['jobtitle'],
                'phoneNumber'=>$request['phone'],
                'role'=>$request['role'],
            ]);
            LogActivity::addToLog('Register New User');

            if($role == 'admin') {
                return redirect()->route('adminDashboard');
            }

            if($role== 'staff'){
//                return view('Admin.managestaffaccess.assignstaff');
                return redirect()->route('adminDashboard');
            }
        }


    }
}
