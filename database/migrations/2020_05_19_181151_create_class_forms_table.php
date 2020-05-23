<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->unsigned();
            $table->integer('subtype_id')->unsigned();
            $table->integer('teacher_id')->unsigned();
            $table->string('time');
            $table->string('date');
            
            $table->foreign('type_id')
                  ->references('id')->on('type_forms')
                  ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('subtype_id')
                  ->references('id')->on('sub_type_forms')
                  ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('teacher_id')
                  ->references('id')->on('teacher_forms')
                  ->onDelete('cascade')->onUpdate('cascade');  

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
        Schema::dropIfExists('class_forms');
    }
}
