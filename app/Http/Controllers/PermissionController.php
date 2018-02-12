<?php

namespace App\Http\Controllers;

use App\Quota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PermissionController extends Controller
{
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

//        Quota::create([
//            'employee_type_id' => request('employee_type_id'),
//            'sick_leave' => request('sick_leave'),
//            'business_leave' => request('business_leave'),
//            'vacation_leave' =>  request('vacation_leave'),
//            'maternity_leave' =>  request('maternity_leave'),
//            'ordination_leave' =>  request('ordination_leave'),
//        ]);


        Quota::create([
            'employee_type_id' => 1,
            'worked_year' => 5,
            'gender' => 'female',
            'sick_leave' => request('sick_leave'),
            'business_leave' =>request('business_leave'),
            'vacation_leave' => request('vacation_leave'),
            'maternity_leave' =>  request('maternity_leave'),
            'ordination_leave' =>   request('ordination_leave'),
        ]);

    return redirect(route('admin.permission'));
       // return Quota::all();
    }

    public function editpermission(Quota $per){
        //$per = Auth::per();
        // return view('admin.admin-edit-permission',compact('per'));
        return view('admin.admin-edit-permission',compact('per'));

    }
    public function savepermission(Quota $per){

//        dd(request('per'));
        $per->update([
            'employee_type_id' => $per->employee_type->id,
            'worked_year' => request('worked_year'),
            'gender' => request('gender'),
            'sick_leave' => request('sick_leave'),
            'business_leave' =>request('business_leave'),
            'vacation_leave' => request('vacation_leave'),
            'maternity_leave' =>  request('maternity_leave'),
            'ordination_leave' =>   request('ordination_leave'),
        ]);

        return redirect(route('admin.permission'));
        //return request()->all();
//        $user =  Auth::user();
//        $per->update(request()->all());
//        return redirect(route('admin.permission'));
    }

}
