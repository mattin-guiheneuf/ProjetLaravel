<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaucesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sauces', function (Blueprint $table) {
            $table->id();
            $table->integer('userId')->nullable();
            $table->string('name');
            $table->string('manufacturer');
            $table->text('description');
            $table->string('mainPepper');
            $table->string('imageUrl');
            $table->integer('heat');
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            $table->json('usersLiked')->nullable();
            $table->json('usersDisliked')->nullable();
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
        Schema::dropIfExists('sauces');
    }
}
