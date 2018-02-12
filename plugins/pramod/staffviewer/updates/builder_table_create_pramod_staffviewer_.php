<?php namespace Pramod\StaffViewer\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePramodStaffviewer extends Migration
{
    public function up()
    {
        Schema::create('pramod_staffviewer_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('fullname', 128);
            $table->timestamp('deleted_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('designation', 256);
            $table->string('education', 256);
            $table->string('mobile', 25);
            $table->string('image_url', 128);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pramod_staffviewer_');
    }
}
