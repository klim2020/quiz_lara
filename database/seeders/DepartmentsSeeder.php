<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Faker;
use App\Facades\FakerFacade;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<20;$i++){
            DB::table('departments')->insert([
                'name'=>Faker::company()

            ]);//
        }
    }
}
