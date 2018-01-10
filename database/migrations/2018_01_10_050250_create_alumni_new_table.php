<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumniNewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_new', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code')->unique();
            $table->integer('sc');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('major');
            $table->text('address')->nullable();
            $table->string('email')->nullable();
            $table->string('tel')->nullable();
            $table->text('jobs')->nullable();
            $table->string('position')->nullable();
            $table->boolean('is_edit')->default(false);
            $table->boolean('is_approve')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumni_new');
    }
}
