<?php namespace Sydonios\Blog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateConceptsTable extends Migration
{
    public function up()
    {
        Schema::create('sydonios_blog_concepts', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('concept_title');
            $table->text('concept_description');
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sydonios_blog_concepts');
    }
}
