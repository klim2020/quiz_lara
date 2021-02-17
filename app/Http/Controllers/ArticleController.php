<?php

namespace App\Http\Controllers;

use App\Repositories\ArticleRepository;
use App\Repositories\Interfaces\ArticleRepositoryInterface;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    function list(ArticleRepositoryInterface $art){
        $data = $art->getAllArticles();
        return view('articles', array('articles' => $data));
    }
}
