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
        Schema::create('payements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('command_id')->constrained('commands');
            $table->string('paymentMode')->nullable();
            $table->string('refPayement')->nullable();
            $table->date('datePayement')->nullable();
            $table->integer('Montant')->nullable();
            $table->foreignId('user_payement')->constrained('users');
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
        Schema::dropIfExists('payements');
    }
};
