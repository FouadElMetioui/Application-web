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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorie_id')
                ->constrained('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name')->nullable();
            $table->string('designation'); // name
            $table->float('PU');
            $table->integer('quantite');
            $table->string('image')->default('no file ');
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
};
