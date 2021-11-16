<?php namespace Sydonios\Blog;

use Backend;
use System\Classes\PluginBase;

/**
 * blog Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'blog',
            'description' => 'Статьи, концепции, отзывы',
            'author'      => 'sydonios',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {

        return [
            'Sydonios\Blog\Components\Articles' => 'Articles',
            'Sydonios\Blog\Components\Concepts' => 'Concepts',
            'Sydonios\Blog\Components\Reviews' => 'Reviews',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'sydonios.blog.some_permission' => [
                'tab' => 'blog',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'blog' => [
                'label'       => 'Блог',
                'url'         => \Backend::url('sydonios/blog/articles'),
                'icon'        => 'icon-laptop',
                'order'       => 500,
                'sideMenu' => [
                    'articles' => [
                        'label'       => 'Статьи',
                        'icon'        => 'icon-list',
                        'url'         => \Backend::url('sydonios/blog/articles'),
                    ],
                    'concepts' => [
                        'label'       => 'Концепция',
                        'icon'        => 'icon-info',
                        'url'         => \Backend::url('sydonios/blog/concepts'),
                    ],
                    'reviews' => [
                        'label'       => 'Отзывы',
                        'icon'        => 'icon-comments-o',
                        'url'         => \Backend::url('sydonios/blog/reviews'),
                    ],

                ]

            ]
        ];
    }
}
