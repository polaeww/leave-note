<?php

namespace App\Http\Controllers;

use App\LeaveNote;
use App\LeaveType;
use App\LeaveLengthType;
use Carbon\Carbon;

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
        $date_start = Carbon::createFromFormat('Y-m-d', request('date_start'));
        $date_end = Carbon::createFromFormat('Y-m-d', request('date_end'));

        $time_start = Carbon::createFromFormat('H:i', request('time_start'));
        $time_end = Carbon::createFromFormat('H:i', request('time_end'));

        $total_hour = 0;

        if ($date_start->diffInDays($date_end) > 0) {
            $total_hour = $date_start->diffInDays($date_end) * 8;
        } else {
            $total_hour = $time_start->diffInHours($time_end);
        }


        LeaveNote::create([
            'date_start' => request('date_start'),
            'date_end' => request('date_end'),
            'time_start' => request('time_start'),
            'time_end' => request('time_end'),
            "total_hour" => $total_hour,
            "reason" => request('reason'),
            "note" => request('note'),
            "document" => request('document'),
            "leave_type_id" => request('leave_type_id'),
            "user_id" => Auth::user()->id,
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
        return redirect(route('employee.status'));
    }

}
