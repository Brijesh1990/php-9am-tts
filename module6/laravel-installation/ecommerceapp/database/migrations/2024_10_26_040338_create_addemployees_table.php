<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addemployees', function (Blueprint $table) {
            $table->increments("id");
            $table->string("name");
            $table->string("email");
            $table->text("address");
            $table->integer("salary");
            $table->integer("country_id")->unsigned();
            $table->foreign("country_id")->references("id")->on("countries");
            $table->integer("state_id")->unsigned();
            $table->foreign("state_id")->references("id")->on("states");
            $table->integer("city_id")->unsigned();
            $table->foreign("city_id")->references("id")->on("cities");
            
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
        Schema::dropIfExists('addemployees');
    }
};
