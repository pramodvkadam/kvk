<?php namespace Vuonxa\Photobox\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateImageManagersTable extends Migration
{

    public function up()
    {
        Schema::create('vuonxa_photobox_image_managers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vuonxa_photobox_image_managers');
    }

}
