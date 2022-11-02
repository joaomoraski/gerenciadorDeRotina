<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciclos', function (Blueprint $table) {
            $table->id();
            $table->string('label', 30);
            $table->date('iniciouEm');
            $table->date('acabouEm');
            $table->string('consideracoes', 500);
            $table->timestamps();
        });

        Schema::create('semanas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Ciclo::class)->nullable(false);
            $table->string('label', 30);
            $table->unsignedInteger('tipo');
            $table->date('iniciouEm');
            $table->date('acabouEm');
            $table->timestamps();

            $table->foreign('ciclo_id')->references('id')->on('ciclos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semanas');
        Schema::dropIfExists('ciclos');
    }
}
