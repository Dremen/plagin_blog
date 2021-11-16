<?php namespace Sydonios\Blogs\Updates;

use Illuminate\Support\Facades\Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class UpdateReviewDescription extends Migration
{
    public function up()
    {
        Schema::table('sydonios_blog_reviews', function ($table) {
            $table->text('review_description')->change();
        });
    }

    public function down()
    {
        Schema::table('sydonios_blog_reviews', function ($table) {
            $table->dropColumn('review_description');
        });
    }
}
