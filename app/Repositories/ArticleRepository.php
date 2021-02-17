<?php
namespace App\Repositories;


use App\Models\Articles;
use App\Repositories\Interfaces\ArticleRepositoryInterface;


class ArticleRepository implements ArticleRepositoryInterface{

    //private $user;

    function __construct(){

    }
    public function getAllArticles()
    {
        $out =  array();
        return Articles::all()->toArray();


    }

    public function getArticleByName(string $name)
    {
        return Articles::where('name',$name)->first;
    }

    public function getArticleByUserName(string $name)
    {
        // TODO: Implement getArticleByUserName() method.
    }

    public function getCurrentArticleByUserId($id)
    {

        // TODO: Implement getCurrentArticleByUserId() method.
    }
}
