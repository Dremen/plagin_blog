<?php namespace Sydonios\Blog\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Reviews Back-end Controller
 */
class Reviews extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Sydonios.Blog', 'blog', 'reviews');
    }
}
