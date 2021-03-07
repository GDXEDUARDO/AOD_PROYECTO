<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parkings', function (Blueprint $table) {
            $table->id();
            $table->string('matricule', 20);
            $table->string('brand', 30)->nullable();
            $table->string('model', 20)->nullable();
            $table->string('color', 20)->nullable();
            $table->tinyInteger('num_doors')->nullable();
            $table->string('description', 100)->nullable();
            $table->datetime('date_and_time_of_entry');
            $table->datetime('date_and_time_of_departure');
            $table->string('drivers_name', 100);
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
        Schema::dropIfExists('parkings');
    }
}
