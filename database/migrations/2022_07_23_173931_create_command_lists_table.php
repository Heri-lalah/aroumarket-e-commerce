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
        Schema::create('command_lists', function (Blueprint $table) {
            $table->foreignId('command_id')->constrained('commands');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('produit_id')->constrained('produits');
            $table->integer('quantity');
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
        Schema::dropIfExists('command_lists');
    }
};
