<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transport_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->unsigned();
            $table->integer('subtype_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->integer('parent_id')->unsigned();
            $table->integer('staff_id')->unsigned();
            $table->string('route_name');
            $table->string('vehicle_number');
            $table->string('driver_name');
            $table->string('license_number');
            $table->string('phone');
            $table->string('no_of_student');
            $table->string('date');
            $table->string('time');
            
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
        Schema::dropIfExists('transport_forms');
    }
}
