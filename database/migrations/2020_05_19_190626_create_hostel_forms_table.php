<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHostelFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hostel_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->unsigned();
            $table->integer('subtype_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->integer('parent_id')->unsigned();
            $table->integer('teacher_id')->unsigned();
            $table->integer('staff_id')->unsigned();
            $table->string('hostel_name');
            $table->string('room_number');
            $table->string('cost_per_bed');
            
            $table->foreign('type_id')
                  ->references('id')->on('type_forms')
                  ->onDelete('cascade')->onUpdate('cascade');

            $table->foreign('subtype_id')
                  ->references('id')->on('sub_type_forms')
                  ->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('hostel_forms');
    }
}
