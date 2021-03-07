<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('article_name', 100);
            $table->string('article_type', 50);
            $table->tinyInteger('num_outputs_of_article')->nullable();
            $table->tinyInteger('num_entries_of_article')->nullable();
            $table->string('description', 100)->nullable();
            $table->date('article_arrival_date');
            $table->date('article_departure_date');
            $table->integer('article_withdrawal_order_number');
            $table->string('who_removes');
            $table->tinyInteger('amount_of_withdrawal');
            $table->tinyInteger('quantity_in_existence');
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
        Schema::dropIfExists('articles');
    }
}
