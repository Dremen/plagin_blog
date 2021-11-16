<?php namespace Sydonios\Blogs\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSlugColumnArticlesTable extends Migration
{
    public function up()
    {
        Schema::table('sydonios_blog_articles', function(Blueprint $table) {
            $table->string('slug');
        });
    }

    public function down()
    {
        Schema::dropIfExists('slug');
    }
}
