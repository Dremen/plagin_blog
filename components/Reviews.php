<?php namespace Sydonios\Blog\Components;

use Cms\Classes\ComponentBase;
use Sydonios\Blog\Models\Review;

class Reviews extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Компонент отзывов',
            'description' => 'Вывод  отзывов на страницу'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {
        $this->page['reviews'] = Review::where('review_hide', '0')->orderBy('sort_order','desc')->get();
    }
}
