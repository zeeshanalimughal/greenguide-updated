<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\User;
use App\Models\User as ModelsUser;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{

    public function getAllUsers()
    {
        $users = ModelsUser::join('user_details', 'user_details.userId', '=', 'users.id')->get([
            'users.name',
            'users.email',
            'users.created_at',
            'users.id',
            'users.status',
            'user_details.company_name',
            'user_details.company_reg_no',
            'user_details.phone',
            'user_details.charity_number',
            'user_details.billing_address',
        ]);

        return view('backend.users', compact('users'));
        // dd($users);
    }

    public function manageUsers($id, $action)
    {
        if ($action === 'delete') {
            if (ModelsUser::find($id)->delete()) {
                Session::flash('success', 'User Deleted Successfully');
                return redirect('admins/users');
            }
            Session::flash('error', 'Something went wrong');
            return redirect('admins/users');
        }
        if ($action === 'activate') {
            if (ModelsUser::find($id)->update(['status' => 'active'])) {
                Session::flash('success', 'User Activated Successfully');
                return redirect('admins/users');
            }
            Session::flash('error', 'Something went wrong');
            return redirect('admins/users');
        }
        if ($action === 'deactivate') {
            if (ModelsUser::find($id)->update(['status' => 'deactive'])) {
                Session::flash('success', 'User Deactivated Successfully');
                return redirect('admins/users');
            }
            Session::flash('error', 'Something went wrong');
            return redirect('admins/users');
        }
    }
}
