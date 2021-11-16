<?php namespace Sydonios\Blogs\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateIsHiddenColumn extends Migration
{
    public function up()
    {
        Schema::table('sydonios_blog_reviews', function(Blueprint $table) {
            $table->boolean('is_hidden')->default(false);
        });
    }

    public function down()
    {
        Schema::dropIfExists('is_hidden');
    }
}
