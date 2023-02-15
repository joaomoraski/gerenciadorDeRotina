<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemediosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remedios', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, "user_id");
            $table->string("nome")->nullable(false);
            $table->string("funcionalidade")->nullable(false);
            $table->integer("quantidadeTomar");
            $table->integer("estoque");
            $table->boolean("isReceitado")->default(false);
            $table->integer("quantasVezes");
            $table->float("intervalo");
            $table->integer("tempoEmDias");
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
        Schema::dropIfExists('remedios');
    }
}
