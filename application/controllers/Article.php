<?php


namespace Application\Controllers;

use Application\Model\Article as ArticleModel;
use Application\Model\Category;


class Article extends Controller
{

    public function index()
    {
        $article = new ArticleModel();
        $articles = $article->all();
        return $this->view('panel.article.index', compact('articles'));
    }

    public function create()
    {
        $Category = new Category();
        $Categories = $Category->all();
        return $this->view('panel.article.create', compact('Categories'));
    }

    public function store()
    {

        $article = new ArticleModel();
        $article->insert($_POST);
        return $this->redirect('article');

    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $Category = new Category();
        $Categories = $Category->all();
        $ob_article = new ArticleModel();
        $article = $ob_article->find($id);
        return $this->view('panel.article.create', compact('Categories', 'article'));
    }

    public function update($id)
    {
        $article = new ArticleModel();
        $article->update($id, $_POST);
        return $this->redirect('article');
    }

    public function destroy($id)
    {
        $article = new ArticleModel();
        $article->delete($id);
        return $this->back();

    }

}