<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('parent_id')->unsigned();
            $table->integer('teacher_id')->unsigned();
            $table->integer('staff_id')->unsigned();
            $table->text('title',200);
            $table->text('message',5000);
            $table->string('date');  
            
            $table->foreign('student_id')
                  ->references('id')->on('student_forms')
                  ->onDelete('cascade')->onUpdate('cascade'); 

            $table->foreign('parent_id')
                  ->references('id')->on('parent_forms')
                  ->onDelete('cascade')->onUpdate('cascade');       
            
            $table->foreign('teacher_id')
                  ->references('id')->on('teacher_forms')
                  ->onDelete('cascade')->onUpdate('cascade'); 
                  
            $table->foreign('staff_id')
                  ->references('id')->on('staff_forms')
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
        Schema::dropIfExists('message_forms');
    }
}
