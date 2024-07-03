<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Imovel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovels', function (Blueprint $table) {
            $table->id();
            $table->string('bairro');
            $table->string('rua');
            $table->text('descricao');
            $table->string('venda');
            $table->integer('ambiente');
            $table->string('cidade');
            $table->boolean('destaque');
            $table->string('preço');
            $table->string('tipo');
            
            //Imagens
            $table->string('image');
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('image7')->nullable();
            $table->string('image8')->nullable();
            $table->string('image9')->nullable();
            $table->string('image10')->nullable();
            $table->string('image11')->nullable();
            $table->string('image12')->nullable();

            //Video
            $table->string('video')->nullable();

            //data
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
        Schema::dropIfExists('imovels');
    }
}
