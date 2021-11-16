<?php namespace Sydonios\Blog\Models;

use Model;
use October\Rain\Database\Traits\Sortable;
use October\Rain\Database\Traits\Validation;
use System\Models\File;
/**
 * Review Model
 */
class Review extends Model
{
    use Validation;
    use Sortable;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'sydonios_blog_reviews';

    protected $rules = [
        'review_title' => 'required|max:165',
        'review_name' => 'required|max:30',
        'review_href' => 'required|max:150',
        'review_description' => 'required|max:65000',
        'review_photo'=> 'required'
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Attributes to be cast to Argon (Carbon) instances
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
        'review_photo' => file::class
    ];
    public $attachMany = [];

}
