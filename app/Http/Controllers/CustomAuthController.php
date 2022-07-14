<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{
    public function index()
    {
        return view('frontend.login', ['auth' => 'auth']);
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/account')
                ->withSuccess('Signed in');
        }

        return redirect("/login")->with('error', 'Username or password is incorrect!');
    }

    public function registration()
    {
        return view('frontend.register');
    }
    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
            'company_name' => 'required',
            'company_reg_no' => 'required',
            'phone' => 'required',
            'charity_no' => 'required',
        ]);
        $data = $request->all();
        $check = $this->create($data);
        $checkUserDetails = $this->createUserDetails($data, $check->id);
        return redirect("/login")->with('success', 'Register successfully!');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }
    public function createUserDetails(array $data, $id)
    {
        return UserDetails::create([
            'userId' => $id,
            'company_name' => $data['company_name'],
            'company_reg_no' => $data['company_reg_no'],
            'phone' => $data['phone'],
            'charity_number' => $data['charity_no'],
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('frontend.home');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }
}
