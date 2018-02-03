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
            'label' => request('label'),
            'sick_leave' => request('sick_leave'),
            'business_leave' => request('business_leave'),
            'vacation_leave' =>  request('vacation_leave'),
            'maternity_leave' =>  request('maternity_leave'),
            'ordination_leave' =>  request('ordination_leave'),
        ]);

      //  return request()->all();

        User::create([
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



    public function delete(User $user){
        $user->delete();

        return redirect()->back();
    }


    public function sum(){
        $users = User::with('userType')->get();

      //  return UserType::all();

        return view('admin.admin-list', compact('users'));
    }

    public function approve(){
        return view('admin.admin-approve');
    }

    // permission
    public function permission(){
        $pers = Quota::all();
        $user = Auth::user();
        return view('admin.admin-permission',compact('pers','user'));

    }
    public function createper()
    {
        return view('admin.admin-addpermission');
    }
    public function storepermission()
    {
        Quota::create([
            'label' => request('label'),
            'sick_leave' => request('sick_leave'),
            'business_leave' => request('business_leave'),
            'vacation_leave' =>  request('vacation_leave'),
            'maternity_leave' =>  request('maternity_leave'),
            'ordination_leave' =>  request('ordination_leave'),
        ]);

        return redirect(route('admin.permission'));
    }

    public function editpermission(){
        //$per = Auth::per();
       // return view('admin.admin-edit-permission',compact('per'));
        return view('admin.admin-edit-permission');

    }
    public function savepermission(){
        //return request()->all();
//        $user =  Auth::user();
//        $per->update(request()->all());
//        return redirect(route('admin.permission'));
    }


    // calendar
    public function calendar(){
        return view('admin.admin-calendar');
    }
}
