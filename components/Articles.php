<?php namespace Sydonios\Blog\Components;

use Cms\Classes\ComponentBase;
use Sydonios\Blog\Models\Article;
use Sydonios\Blogs\Models\Article as ModelsArticle;

class Articles extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Компонент статей"',
            'description' => 'Вывод статей на страницу'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $slug = $this->page['slug'] = $this->param('slugArticle');
        if (isset($slug)) {
            $this->page['article'] = Article::where('slug', $slug)->with('article_photo')->first();
        } else {
            $articles = Article::orderBy('sort_order', 'desc')->get();
            $this->page['articles'] = $articles;
        }
    }
}
