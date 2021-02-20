<?php

namespace App\Http\Controllers;

use App\Library\XMLparser;
use App\Providers\XMLServiceProvider;
use App\Repositories\EmployeersRepository;
use Illuminate\Http\Request;
use function GuzzleHttp\json_encode;

/**
 * Class XMLImportController
 *
 * @package App\Http\Controllers
 */
class XMLImportController extends Controller
{



    /**
     * Show the XML input form
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function getxml(XMLparser $xml){
       //$arr = $xml->read();
       $name = 'john';

       return view('xmlinput', array('name'=>'name'));
   }
    /**
     * загрузга xml файла
     *
     * Request $request
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function loadxml(Request $request, XMLparser $xml, EmployeersRepository $employee){

       $fileName = time().'.'.$request->file->extension();

       $request->file->move(public_path('uploads'), $fileName);
       $data = $xml->read(public_path('uploads').'/'.$fileName);
        $employee->import($data);
       return $data[2]['name'];

   }
}
