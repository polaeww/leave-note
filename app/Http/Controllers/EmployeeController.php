<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(){
        $user = Auth::user();
        return view('employee.employee-edit',compact('user'));
    }

    public function save(){
        //return request()->all();
        $user =  Auth::user();
        $user->update(request()->all());
        return redirect(route('employee.index'));
    }

    public function index(){
        $user = Auth::user();
        return view('employee.employee-index',compact('user'));
    }

    public function store()
    {
        //  return request()->all();

        LeaveIn::create([
            'first_name' => request('first_name'),
            'password' => "password",
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

    public function status(){
        return view('employee.employee-status');
    }

    public function roles(){
        return view('employee.employee-roles');
    }



}
