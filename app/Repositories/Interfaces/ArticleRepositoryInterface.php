<?php
namespace App\Repositories\Interfaces;

interface ArticleRepositoryInterface{
    //
    /**
     * @return mixed article list
     */
    public function getAllArticles();
    //

    /**
     * @param String $name article name
     * @return mixed article
     */
    public function getArticleByName(String $name);
    //

    /**
     * @param String $name UserName
     * @return mixed article
     */
    public function getArticleByUserName(String $name);
    //

    /**
     * @return mixed article
     */
    public function getCurrentArticleByUserId($id);
}
