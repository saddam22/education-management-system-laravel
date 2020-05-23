<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parent_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('type_id')->unsigned();
            $table->integer('subtype_id')->unsigned();
            $table->string('fname',50);
            $table->string('lname',50);
            $table->string('dob');
            $table->string('occupation');
            $table->string('email')->unique();
            $table->text('address',300);
            $table->string('phone',20)->unique();
            $table->text('bio',1020);
            $table->string('image')->default('default.png')->unique();
            
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
        Schema::dropIfExists('parent_forms');
    }
}
