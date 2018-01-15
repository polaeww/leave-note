<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        Leave::create([
            'start_at' => request('start_at'),
            'end_at' => request('end_at'),
            "total_house" => request('total_house'),
            "reason" => request('reason'),
            "note" => request('note'),
            "approve_date" => request('approve_date'),
            "approve_by" => request('approve_by'),
            "approve_reason" => request('approve_reason'),
            "leave_types_id" => 1,
            "users_id" => 1,
            "leave_lengths_id" => 1,
        ]);

        return redirect(route('employee.status'));
    }

    public function show(LeaveController $calendar)
    {
        //
    }

    public function edit(LeaveController $calendar)
    {
        //
    }

    public function update(Request $request, LeaveController $calendar)
    {
        //
    }

    public function destroy(LeaveController $calendar)
    {
        //
    }

}
