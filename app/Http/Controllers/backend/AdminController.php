<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Advert;
use App\Models\BusinessDirectory;
use App\Models\Contact;
use App\Models\pages\Advertise;
use App\Models\User;
use Exception;

use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function index(Request $request)
    {
        $users = User::count();
        $directories = BusinessDirectory::count();
        $magazines = Advertise::count();
        $adverts = Advert::count();
        return view('backend.dashboard',['users'=>$users,'directories'=>$directories,'magazine'=>$magazines,'adverts'=>$adverts]);
    }
    public function login()
    {
        if (session()->has('admin')) {
            return redirect('/admins');
        } else {
            return view('backend.login', ["auth" => "auth"]);
        }
    }

    public function admin_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $pass = Admin::where('email', $request->input('email'))->get()->toArray();
        // dd($pass[0]['password']);

        // $admin = Admin::where('email', $request->input('email'))
        //     ->where('password', Hash::check($pass[0]['password'],$request->input('password')))
        //     ->get()->toArray();
        if (sizeof($pass) > 0) {

            if (Hash::check($request->input('password'), $pass[0]['password'])) {
                $request->session()->put('admin', $pass[0]['name']);
                return redirect('/admins');
            } else {
                session()->flash('error', "Accoutn not exists");
                return redirect()->route('/admins/login');
            }
        } else {
            session()->flash('error', "Accoutn not exists");
            return redirect()->route('/admins/login');
        }
    }


    public function password_reset()
    {
        return view('backend.password-reset', ["auth" => "auth"]);
    }



    public function changePassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $admin = Admin::where('email', $request->input('email'))->get();

        if (sizeof($admin->toArray()) > 0) {
            $request->session()->put('adminId', $admin->toArray()[0]['id']);
            return redirect('/admins/update-password');
        } else {
            session()->flash('error', 'Email is not valid');
            return redirect('admins/password-reset');
        }
    }




    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password|min:6'
        ]);
        $admin = Admin::where('id', $request->input('id'))->update([
            'password' => Hash::make($request->input('password'))
        ]);
        if ($admin) {
            session()->forget('adminId');
            session()->flash('success', "Password Updated Successfully");

            return redirect()->route('/admins/login');
        } else {
            session()->flash('success', "Something went wrong");
            return redirect()->route('/admins/login');
        }
    }

    public function getAllMessages()
    {
        $messages = Contact::select("*")
            ->orderBy("id", 'DESC')
            ->get();
        return view('backend.messages', compact('messages'));
    }


    public function deleteMessage($id)
    {
        try {
            if(Contact::where('id',$id)->delete()){
            session()->flash('success', "Message Deleted Successfully");
            return redirect('admins/messages');
            }else{   session()->flash('error', "No Message found against id: $id");
                return redirect('admins/messages');}
        } catch (Exception $e) {
            session()->flash('error', "Something went wrong");
            return redirect('admins/messages');
        }
    }
}
