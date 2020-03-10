<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserChallengeRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_challenge_relations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('challenge_id')->unsigned();
            $table->string('codeFileName');
            $table->foreign('user_id')->references('id')->on('users')
                       ->onDelete('cascade');

            $table->foreign('challenge_id')->references('id')->on('challenges')
                        ->onDelete('cascade');

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
        Schema::dropIfExists('user_challenge_relations');
    }


    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function challenge()
    {
      return $this->belongsTo('App\Challenge');
    }

}
