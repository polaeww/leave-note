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
            "admin_approve" => request('admin_approve'),
            "admin_reason" => request('admin_reason'),
            "leader_approve" => request('leader_approve'),
            "leader_reason" => request('leader_reason'),
            "director_approve" => request('director_approve'),
            "director_reason" => request('director_reason'),
            "leave_types_id" => 1,
            "users_id" => 1,
            "leave_lengths_id" => 1,
            "approvements_id" => 1,
        ]);

        return redirect(route('leave.create'));
    }

    public function edit(LeaveNote $leave)
    {
        $user = Auth::user();
        return view('employee.leave-edit',compact('leave','user'));
    }

    public function save()
    {
        $leave = LeaveNote::find(request('leave_id'));
        $leave->date_start = request('date_start');
        $leave->date_end = request('date_end');
        $leave->time_start = request('time_start');
        $leave->time_end = request('time_end');
        $leave->total_hour = request('total_hour');
        $leave->reason = request('reason');
        $leave->note = request('note');
        $leave->document = request('document');

        $leave->save();
//        $leave->update(request()->all());
        return redirect(route('employee.status'));
    }

}
