<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('razaosocial', '50');
            $table->string('nomefantasia', '50');
            $table->unsignedBigInteger('cnpj');
            $table->string('endereco', '35');
            $table->string('email', '50');
            $table->unsignedBigInteger('telefone');
            $table->string('nomeresponsavel', '50');
            $table->unsignedBigInteger('cpf');
            $table->unsignedBigInteger('celular');
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
        Schema::dropIfExists('clientes');
    }
}
