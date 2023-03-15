<?php namespace Alldone\Plugin\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAlldonePluginCategories extends Migration
{
    public function up()
    {
        Schema::create('alldone_plugin_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alldone_plugin_categories');
    }
}
