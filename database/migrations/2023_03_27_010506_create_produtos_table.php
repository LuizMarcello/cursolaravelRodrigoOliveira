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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->double('preco', 10, 2);
            $table->string('slug');
            $table->string('imagem')->nullable();
            $table->unsignedBigInteger('id_user');
            
            /* Relacionamento de "um-para-muitos" */
            /* Um usuário pode ter muitos produtos */
            $table->foreign('id_user')->references('id')->on('users')
            ->onDelete('cascade')->onUpdate('cascade');

            /* Relacionamento de "um-para-muitos" */
            /* Uma categoria pode ter muitos produtos */
            $table->unsignedBigInteger('id_categoria');
            $table->foreign('id_categoria')->references('id')->on('categorias')
            ->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('produtos');
    }
};
