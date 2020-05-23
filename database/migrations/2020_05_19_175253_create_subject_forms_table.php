<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->unsigned();
            $table->integer('subtype_id')->unsigned();
            $table->string('subject_name');
            
            $table->foreign('type_id')
                  ->references('id')->on('type_forms')
                  ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('subtype_id')
                  ->references('id')->on('sub_type_forms')
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
        Schema::dropIfExists('subject_forms');
    }
}
