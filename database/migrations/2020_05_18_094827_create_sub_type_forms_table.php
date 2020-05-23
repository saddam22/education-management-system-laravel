<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubTypeFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_type_forms', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("type_id")->unsigned();
            $table->string("subtype");
            
            $table->foreign("type_id")
                  ->references("id")->on("type_forms")
                  ->onDelete("cascade")->onUpdate("cascade");

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
        Schema::dropIfExists('sub_type_forms');
    }
}
