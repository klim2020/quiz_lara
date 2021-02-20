<?php
namespace App\Repositories;

use App\Models\Employees;
use Illuminate\Support\Facades\DB;

class EmployeersRepository{

    /**импорт из файла, который был загружен пользователем
     * @param $array
     */
    public function import($array){
        foreach ($array as $val){
            if(!Employees::where('email', $val['email'])->exists()){
                Employees::insert(array($val));
            }
        }
    }
    public function getAllEmployersInfo($pagination=array()){
        return DB::select( DB::raw("SELECT employees.*,departments.name as department FROM employees left join departments on departments.id = employees.department_id") );
    }

}
