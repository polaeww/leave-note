<?php

use Illuminate\Database\Seeder;
use App\User;
use App\UserType;
use \App\Quota;
use App\EmployeeType;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
          User Type
         */

        $employee = UserType::create([
            'name' => 'employee'
        ]);

        $admin = UserType::create([
            'name' => 'admin'
        ]);

        $leader = UserType::create([
            'name' => 'leader'
        ]);

        $director = UserType::create([
            'name' => 'director'
        ]);

         /*
          Employee Type
         */

        $full_time_employee = EmployeeType::create([
            'name' => 'Full-time'
        ]);

        $trainee_employee = EmployeeType::create([
            'name' => 'Trainee'
        ]);

        $intership_employee = EmployeeType::create([
            'name' => 'Internship Student'
        ]);


        /*
          Quata 
         */

        $quota_a = Quota::create([
            'employee_type_id' => $full_time_employee->id,
            'gender' => 'male',
            'worked_year' => 3,
            'sick_leave' => 30 * 8,
            'business_leave' => 5 * 8,
            'vacation_leave' => 6 * 8,
            'maternity_leave' => 0,
            'ordination_leave' => 120 * 8
        ]);


        /*
          User
         */

        User::create([
            'email' => 'employee@mail.com',
            'password' => bcrypt('password'),
            'first_name' => 'Employee',
            'last_name' => 'Big data',
            'nick_name' => 'ไป๋',
            'position' => 'Mobile Developer',
            'employee_type_id' => $full_time_employee->id,
            'start_work' => '2015-08-02',
            'gender' => 'male',
            'phone' => '0920922721',
            'user_types_id' => $employee->id,
        ]);
    }
}
