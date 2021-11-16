<?php namespace Sydonios\Blog\Models;

use Model;
use October\Rain\Database\Traits\Sortable;
use October\Rain\Database\Traits\Validation;
use PhpOffice\PhpSpreadsheet\Worksheet\AutoFilter\Column\Rule;
use System\Models\File;
/**
 * Concept Model
 */
class Concept extends Model
{
    use Validation;
    use Sortable;

    protected $rules = [
        'concept_title' =>  'required|max:191',
        'concept_description' => 'required|max:65000',
        'concept_photo' => 'required'
    ];
    
    /**
     * @var string The database table used by the model.
     */
    public $table = 'sydonios_blog_concepts';

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
        'concept_photo' => File::class
    ];
    public $attachMany = [];
}
