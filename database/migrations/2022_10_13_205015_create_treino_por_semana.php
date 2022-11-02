<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTreinoPorSemana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treino_por_semana', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Semana::class)->nullable(false);
            $table->foreignIdFor(\App\Models\Treino::class)->nullable(false);
            $table->float("peso");
            $table->float("nota");
            $table->string("observacao", 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treino_por_semana');
    }
}
