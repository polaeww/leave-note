<?php

namespace App;

use App\Quota;
use App\LeaveNote;
use App\LeaveType;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


   // public $timestamps = false;

    public function userType()
    {
        return $this->belongsTo(UserType::class, 'user_types_id');
    }



    public function leaveNotes()
    {
        return $this->hasMany(LeaveNote::class);
    }

    public function getQuotaLimit()
    {
        return Quota::where('employee_type_id', Auth::user()->employee_type_id)
            ->where('gender', Auth::user()->gender)
            ->first();
    }

    public function getCurrentQuota()
    {

        $leave_types = LeaveType::all();
        $leave_types->each(function ($leave_type_item, $key) {

            // Get all leave note of current year
            $now = Carbon::now();
            $leaveNotesCurrentYear = $this->leaveNotes()
                ->whereYear('date_start', '=', $now->year)
                ->get();


            // Query used quota of each leave type
            $leave_type_item->used = 0;

            $leaveNotesCurrentYear->each(function ($leave_note_item, $key) use ($leave_type_item) {
                if ($leave_note_item->leave_type_id == $leave_type_item->id) $leave_type_item->used += $leave_note_item->total_hour;
            });

            // Query quota limit of each leave type
            $quota_limit = $this->getQuotaLimit();

            if ($leave_type_item->name == 'ลาป่วย') $leave_type_item->limit = $quota_limit->sick_leave;
            else if ($leave_type_item->name == 'ลากิจ') $leave_type_item->limit = $quota_limit->business_leave;
            else if ($leave_type_item->name == 'ลาพักร้อน') $leave_type_item->limit = $quota_limit->vacation_leave;
            else if ($leave_type_item->name == 'ลาคลอด') $leave_type_item->limit = $quota_limit->maternity_leave;
            else if ($leave_type_item->name == 'ลาบวช') $leave_type_item->limit = $quota_limit->ordination_leave;

            // Query remaining quota of each leave type
            $leave_type_item->remaining = $leave_type_item->limit - $leave_type_item->used;            

        });

        return $leave_types;
    }



}
