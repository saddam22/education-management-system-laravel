<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticeFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notice_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('teacher_id')->unsigned();
            $table->integer('staff_id')->unsigned();
            $table->text('title',200);
            $table->text('details',5000);
            $table->string('date');  
            
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
        Schema::dropIfExists('notice_forms');
    }
}
