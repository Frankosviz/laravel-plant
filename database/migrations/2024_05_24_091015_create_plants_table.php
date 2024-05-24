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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->string('common_name', 255);
            $table->string('scientific_name', 255);
            $table->string('class', 255);
            $table->string('family', 255);
            $table->string('species', 255);
            $table->tinyInteger('width');
            $table->tinyinteger('height');
            $table->text('habitat');
            $table->string('leaf_type', 255);
            $table->string('leaf_color', 255);
            $table->string('flower_color', 255)->nullable();
            $table->text('img');
            $table->date('date_spotted');
            $table->string('place_spotted', 255);
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('plants');
    }
};
