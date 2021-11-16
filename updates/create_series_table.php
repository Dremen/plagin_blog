<?php namespace Sydonios\Blog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSeriesTable extends Migration
{
    public function up()
    {
        Schema::create('sydonios_blog_series', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sydonios_blog_series');
    }
}
