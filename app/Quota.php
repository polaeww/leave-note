<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quota extends Model
{
    protected $guarded = [];

    public function employee_type(){
        return $this->belongsTo(EmployeeType::class,'employee_type_id');
    }

}
