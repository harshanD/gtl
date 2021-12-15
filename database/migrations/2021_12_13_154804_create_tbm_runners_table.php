<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmRunnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbm_runners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('external_id', 10)->nullable();
            $table->string('name', 255);
            $table->string('avatar', 255)->nullable();
            $table->date('dob')->nullable();
            $table->enum('sex', array(0, 1))->default(1)->comment('1-male 0-female');
            $table->string('color', 255)->nullable();
            $table->double('weight')->nullable();
            $table->string('sire', 255)->nullable();
            $table->string('dam', 255)->nullable();
            $table->unsignedBigInteger('race_id')->index();
            $table->timestamps();


            $table->foreign('race_id')
                ->references('id')
                ->on('tbm_races')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbm_runners');
    }
}
