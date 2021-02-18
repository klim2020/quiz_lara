<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleRepository;
use App\Repositories\Interfaces\ArticleRepositoryInterface;
use Illuminate\Http\Request;
use Faker;

class ArticleController extends Controller
{
    //
    function list(ArticleRepositoryInterface $art){
        $name = Faker::name();
        $data = $art->getAllArticles();
        return view('articles', array('articles' => $data, 'name'=>$name));
    }
}
