<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Processos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processos', function (Blueprint $table) {
            $table->id('ProcessoID');
            $table->integer('ClienteCodigo');
            $table->integer('DespachanteID');
            $table->integer('TerminalAtracacaoID');
            $table->integer('NumeroProcesso');
            $table->integer('NumeroDI');
            $table->date('DataDI');
            $table->date('DataLI');
            $table->date('DataDesembaraco');
            $table->date('DataEntrega');
            $table->date('DataFechamento');
            $table->boolean('Ativo');
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
        Schema::dropIfExists('processos');
    }
}
