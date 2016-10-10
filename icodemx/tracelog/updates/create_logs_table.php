<?php namespace Icodemx\Tracelog\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateLogsTable extends Migration
{
    public function up()
    {
        Schema::create('icodemx_tracelog_logs', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('userfallback')->nullable();
            $table->string('msg')->nullable();
            $table->string('traceable_type')->nullable();
            $table->string('reference')->nullable();
            $table->integer('traceable_id')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('icodemx_tracelog_logs');
    }
}
