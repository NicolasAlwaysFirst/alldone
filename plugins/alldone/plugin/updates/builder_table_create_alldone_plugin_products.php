<?php namespace Alldone\Plugin\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class BuilderTableCreateAlldonePluginProducts extends Migration
{
    public function up()
    {
        Schema::create('alldone_plugin_products', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->string('name');
            $table->decimal('price', 10, 0);
            $table->integer('category_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('alldone_plugin_products');
    }
}
