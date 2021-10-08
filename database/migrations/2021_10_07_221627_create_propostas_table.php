<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropostasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('propostas', function (Blueprint $table) {
            $table->id();
            $table->string('enderecoobra', '50');
            $table->float('valortotal', 10, 2);
            $table->float('sinal', 9, 2);
            $table->integer('qtdparcela');
            $table->float('valorparcelas', 9, 2);
            $table->date('datainiciopagamento');
            $table->date('datasparcelas');
            $table->string('anexo', '255')->nullable();
            // Status: 0 - Fechada, 1 - Aberta, 2 - Aprovada
            $table->integer('status');
            $table->unsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')->references('id')->on('clientes');
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
        Schema::table('propostas', function(Blueprint $table){
            $table->dropForeign('propostas_cliente_id_foreign');
            $table->dropColumn('cliente_id');
        });
        Schema::dropIfExists('propostas');
    }
}
