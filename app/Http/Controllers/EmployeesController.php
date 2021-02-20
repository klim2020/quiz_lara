<?php

namespace App\Http\Controllers;

use App\Repositories\EmployeersRepository;
use Illuminate\Http\Request;
use function Opis\Closure\serialize;

class EmployeesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    /**
     *  /employes вход
     */
    public function show(EmployeersRepository $emplRep){
        $arr = $emplRep->getAllEmployersInfo();
        return view('employees',array('arr'=>$arr, 'val'=>serialize($arr)));
    }
}
