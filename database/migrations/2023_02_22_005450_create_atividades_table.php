<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, "user_id");
            $table->text("nome")->nullable(false)->default('');
            $table->integer('quadrante')->nullable(false)->default(0);
            $table->integer('ordem')->nullable(false)->default(1);
            $table->boolean('isConcluido')->nullable(false)->default(false);
            $table->text('diasDaSemana', 255);
            $table->dateTime('excluidoEm')->nullable(true);
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
        Schema::dropIfExists('atividades');
    }
}
