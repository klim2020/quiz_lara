<?php

namespace Database\Seeders;
use App\Models\Employees;
use Illuminate\Database\Seeder;
use DB;
use Faker;
use App\Facades\FakerFacade;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<1000;$i++){
            $type = rand(1,2);
            $val = ($type == 1)?rand(1,10):rand(10,30)*100;
            DB::table('employees')->insert([
                'name'=>Faker::name(),
                'paytype'=>$type,
                'value'=>$val,
                'department_id'=> rand(1,19)
            ]);

        }
    }
}
