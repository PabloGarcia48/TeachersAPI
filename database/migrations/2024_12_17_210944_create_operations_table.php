<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('operations', function (Blueprint $table) {
            $table->id(); // Chave primária
            $table->string('origem', 10)->nullable(); // Ex.: "0000/19"
            $table->string('conta', 15)->nullable(); // Ex.: "99999-9"
            $table->string('nome_correntista', 255)->nullable(); // Ex.: "ASSOCIADO TESTE"
            $table->string('docto', 20)->nullable(); // Ex.: "7462148"
            $table->string('cod_descricao', 255)->nullable(); // Ex.: "BL2 CRED DESBLOQUEIO JUDICIAL"
            $table->decimal('dr', 15, 2)->nullable(); // Valor DR
            $table->decimal('debito', 15, 2)->nullable(); // Valor do débito
            $table->decimal('credito', 15, 2)->nullable(); // Valor do crédito
            $table->dateTime('data_hora')->nullable(); // Data e hora no formato "d/m/Y H:i"
            $table->timestamps(); // Colunas created_at e updated_at

            // $table->id();
            // $table->integer('Cooperativa')->nullable();
            // $table->integer('Agencia')->nullable();
            // $table->string('Conta')->nullable();
            // $table->string('NomeCooperado')->nullable();
            // $table->integer('Documento')->nullable();
            // $table->string('Cód_Movimentacao')->nullable();
            // $table->string('Des_Movimentacao')->nullable();
            // $table->string('Debito')->nullable();
            // $table->string('Credito')->nullable();
            // $table->dateTime('DataHora')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('operations');
    }
};
