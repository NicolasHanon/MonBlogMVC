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
        Schema::create('billet_categorie', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('billet_id');
            $table->foreign('billet_id')
            ->references('id')
            ->on('billets')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->unsignedBigInteger('categorie_id');
            $table->foreign('categorie_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('billet_categorie');
    }
};
