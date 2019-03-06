<?php namespace Hollingworth\Taggable\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTagsTables extends Migration
{
    public function up()
    {
        Schema::create('hollingworth_taggable_tags', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
        });

        Schema::create('hollingworth_taggable_taggables', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('tag_id');
            $table->string('taggable_type');
            $table->integer('taggable_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('hollingworth_taggable_tags');
    }
}
