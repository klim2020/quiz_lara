<?php
namespace App\Repositories;

use App\Models\Employees;

class EmployeersRepository{

    public function import($array){
        foreach ($array as $val){
            if(!Employees::where('email', $val['email'])->exists()){
                Employees::insert(array($val));
            }
        }
    }

}
