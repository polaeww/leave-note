<?php

namespace App;

use App\Quota;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

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

    public function getQuota()
    {
        return Quota::where('employee_type_id', Auth::user()->employee_type_id)
            ->where('gender', Auth::user()->gender)
            ->get();
    }
}
