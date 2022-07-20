<?php

namespace App\Http\Controllers\frontend;

use App\Models\User;
use App\Models\UserDetails;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class UserAccount extends Controller
{
    function index()
    {
        $userData = UserDetails::where('userId', FacadesAuth::user()->id)->get();
        return view('frontend.account', compact('userData'));
    }


    function update(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'company_name' => 'required',
            'company_reg_no' => 'required',
            'phone' => 'required',
            'billing_address' => 'required',
        ]);

        $user = User::find(FacadesAuth::user()->id);
        $userDetails = UserDetails::where('userId', FacadesAuth::user()->id)->update([
            'company_name' => $request->input('company_name'),
            'company_reg_no' => $request->input('company_reg_no'),
            'phone' => $request->input('phone'),
            'charity_number' => $request->input('charity_number'),
            'billing_address' => $request->input('billing_address'),
        ]);
        // dd($userDetails);
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user->update();

        return redirect("/account")->with('success', 'Signed-in successfully!');
    }



    public function resetPasswordForm()
    {
        return view('frontend.change-password');
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6|same:confirm_password',
            'confirm_password' => 'required|min:6',
        ]);

        $user = User::where('email', '=', $request->input('email'))->first();
        if ($user !== null) {
            $user = User::where('email', '=', $request->input('email'))->update([
                'password' => Hash::make($request->input('password'))
            ]);
            if ($user) {
                $request->session()->flash('success', 'Password Reset successfully!');
                return redirect("/login");
            }
        }
        $request->session()->flash('error', 'Accoutn not found please register your account!');
        return redirect("/login");
    }
}
