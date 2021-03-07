<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radios', function (Blueprint $table) {
            $table->id();
            $table->string('program_name', 100);
            $table->string('topic', 50);
            $table->string('assigned_announcer', 50);
            $table->string('invited_announcer_1', 50)->nullable();
            $table->string('invited_announcer_2', 50)->nullable();
            $table->string('invited_announcer_3', 50)->nullable();
            $table->string('invited_announcer_4', 50)->nullable();
            $table->datetime('program_start_date_and_time');
            $table->datetime('end_date_and_time_of_the_program');
            $table->string('song_of_the_week', 100);
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
        Schema::dropIfExists('radios');
    }
}
