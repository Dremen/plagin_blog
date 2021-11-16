<?php namespace Sydonios\Blog\Components;

use Cms\Classes\ComponentBase;
use Sydonios\Blog\Models\Concept;
class Concepts extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Компонент концепций',
            'description' => 'Вывод концепций на страницу'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun() {
        $this->page['concepts'] = Concept::orderBy('sort_order', 'desc')->get();
    }
}
