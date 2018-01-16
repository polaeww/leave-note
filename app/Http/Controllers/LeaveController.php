<?php

namespace App\Http\Controllers;

use App\LeaveNote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LeaveController extends Controller
{
    public function layout(){
        return view('layout');
    }

    public function create(){
        $user = Auth::user();
        return view('employee.employee-create',compact('user'));
    }

    public function store()
    {
//        return request()->all();
        LeaveNote::create([
            'date_start' => request('date_start'),
            'date_end' => request('date_end'),
            'time_start' => request('time_start'),
            'time_end' => request('time_end'),
            "total_hour" => request('total_hour'),
            "reason" => request('reason'),
            "note" => request('note'),
            "document" => request('document'),
            "approve_date" => request('approve_date'),
            "approve_by" => request('approve_by'),
            "approve_reason" => request('approve_reason'),
            "leave_types_id" => 1,
            "users_id" => 1,
            "leave_lengths_id" => 1,
        ]);

        return redirect(route('leave.create'));
    }

    public function edit()
    {
        $leave = LeaveNote::leave_notes();
        $user = Auth::user();
        return view('employee.leave-edit',compact('leave','user'));
    }

    public function save()
    {
        $leave = LeaveNote::leave_notes();
        $leave->update(request()->all());
        return redirect(route('employee.status'));
    }

}
