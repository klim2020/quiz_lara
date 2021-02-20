<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
//use Faker;
use App\Facades\Faker;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = array();
        for ($i=0;$i<21;$i++){
            $position[] = Faker::jobTitle();
        }
        for ($i=1;$i<1000;$i++){
            $type = rand(1,2);


            $val = ($type == 1)?rand(1,10):rand(10,30)*100;
            $date = Faker::date();
            $date2 = Faker::date();
            DB::table('employees')->insert([
                'name'=>Faker::name(),
                'email'=>Faker::email(),
                'birthdate'=>$date2,
                'position'=>$position[rand(0,20)],
                'paytype'=>$type,
                'value'=>$val,
                'department_id'=> rand(1,19),
                'created_at'=>$date,
                'updated_at'=>$date

            ]);
            echo "row ".$i." generated \n";
        }
    }
}
