<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('revendedor')->nullable();
            $table->string('cliente');
            $table->string('pagamento');
            $table->string('modelo');
            $table->string('tecido');
            $table->string('cor')->nullable();
            $table->string('codigo')->nullable();
            $table->string('qty')->nullable();
            $table->string('largura')->nullable();
            $table->string('altura')->nullable();
            $table->string('metro_q')->nullable();
            $table->string('com')->nullable();
            $table->string('vao')->nullable();
            $table->string('fita')->nullable();
            $table->string('cor_fita')->nullable();
            $table->string('base')->nullable();
            $table->string('obs')->nullable();
            $table->string('bando')->nullable();
            $table->string('cor_bando')->nullable();
            $table->string('qty_bando')->nullable();
            $table->string('largura_bando')->nullable();
            $table->string('metro_l')->nullable();
            $table->string('desenho')->nullable();
            $table->string('aba')->nullable();
            $table->string('acessorios')->nullable();
            $table->string('qty_acc')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('pedidos');
    }
}
