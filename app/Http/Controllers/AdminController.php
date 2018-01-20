<?php

namespace App\Http\Controllers;

use App\Quota;
use App\User;
use App\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function create()
    {
        return view('admin.admin-add');
    }

    public function store()
    {

        $quota = Quota::create([
            'sick_leave' => 10,
            'business_leave' => 10,
            'vacation_leave' => 10,
            'maternity_leave' => 10,
            'ordination_leave' => 10,
        ]);

      //  return request()->all();

        User::create([
            'first_name' => request('first_name'),
            'password' => bcrypt('password'),
            "last_name" => request('last_name'),
            "nick_name" => request('nick_name'),
            "position" => request('position'),
            "status" => request('status'),
            "start_work" => request('start_work'),
            "gender" => request('gender'),
            "email" => request('email'),
            "phone" => request('phone'),
            "quotas_id" => $quota->id,
            "user_types_id" => 1,
        ]);

        return redirect(route('admin.sum'));
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect()->back();
    }


    public function sum()
    {
        $users = User::with('userType')->get();

      //  return UserType::all();

        return view('admin.admin-list', compact('users'));
    }

    public function approve()
    {
        return view('admin.admin-approve');
    }

    public function permission()
    {
        return view('admin.admin-permission');
    }

    public function calendar()
    {
        return view('admin.admin-calendar');
    }
}
