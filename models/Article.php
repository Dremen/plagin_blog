<?php namespace Sydonios\Blog\Models;


use Illuminate\Support\Facades\Log;
use Model;
use October\Rain\Database\Traits\Sortable;
use October\Rain\Database\Traits\Validation;
use System\Models\File;
use Sydonios\Site\Models\Subscription;



/**
 * Article Model
 */
class Article extends Model
{
    use Validation;
    use Sortable;


    /**
     * @var string The database table used by the model.
     */
    
    public $table = 'sydonios_blog_articles';

    protected $rules = [
        'article_title' =>  'required|max:191',
        'article_description' => 'required|max:65000',
        'article_photo' => 'required'
    ];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

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
        'article_photo' => File::class
    ];
    public $attachMany = [];


    public function beforeSave()
    {

        if(post('Article')['_notificateUsers'] == "1")
        {
            $emails = Subscription::all('email')->toArray();
            $subject = $this->article_title;
            $text = preg_replace('/<[^>]*>/', '', explode("\n", $this->article_description)[0]);
            $text = preg_replace("/&nbsp;/",'', $text);

            $data['imgSrc'] = 'https://yt3.ggpht.com/a/AGF-l7_B5TuTbQ3G1BFTUxD1PgpmVznP_OAYKOL3fA=s900-c-k-c0xffffffff-no-rj-mo';

            $data['text'] = $text;
            $data['articleSrc'] = \URL::to('/') . "/blog/" . $this->slug;
            foreach($emails as $email)
            {
                \Mail::queue('sydonios.site::mail.notification_new_article', $data, function($message) use ($email, $subject) {
                    $message->subject($subject);
                    $message->to($email);
                });
            }
        }

        $this->slug = str_slug($this->article_title, '-');
    }
}

