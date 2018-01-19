<?php

namespace App\Http\Controllers;

use App\LeaveNote;
use App\LeaveType;
use App\LeaveLengthType;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LeaveController extends Controller
{
    public function layout()
    {
        return view('layout');
    }

    public function create()
    {
        $user = Auth::user();
        $leave_types = LeaveType::all();
        $leave_length_types = LeaveLengthType::all();

        return view('employee.employee-create', compact('user', 'leave_types', 'leave_length_types'));
    }

    public function store()
    {
        //return request()->all();
        LeaveNote::create([
            'date_start' => request('date_start'),
            'date_end' => request('date_end'),
            'time_start' => request('time_start'),
            'time_end' => request('time_end'),
            "total_hour" => 20,
            "reason" => request('reason'),
            "note" => request('note'),
            "document" => request('document'),
            "leave_type_id" => request('leave_type_id'),
            "users_id" => Auth::user()->id,
            "leave_length_type_id" => request('leave_length_type_id'),
        ]);

        return redirect(route('leave.create'));
    }

    public function edit(LeaveNote $leave)
    {
        $user = Auth::user();

        $leave_types = LeaveType::all();
        $leave_length_types = LeaveLengthType::all();

        return view('employee.leave-edit', compact('leave', 'user', 'leave_types', 'leave_length_types'));
    }

    public function save(LeaveNote $leave)
    {
        $leave->update(request()->all());
        // $leave = LeaveNote::find(request('leave_id'));
        // $leave->date_start = request('date_start');
        // $leave->date_end = request('date_end');
        // $leave->time_start = request('time_start');
        // $leave->time_end = request('time_end');
        // $leave->total_hour = request('total_hour');
        // $leave->reason = request('reason');
        // $leave->note = request('note');
        // $leave->document = request('document');

        // $leave->save();
//        $leave->update(request()->all());
        return redirect(route('employee.status'));
    }

}
