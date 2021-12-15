<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmRacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbm_races', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('external_id', 10)->nullable();
            $table->string('name', 255);
            $table->enum('status', array(0, 1))->default(0)->comment('1-closed 0-open');
            $table->dateTime('started_timestamp')->nullable();
            $table->unsignedBigInteger('meeting_id')->index();
            $table->timestamps();

            $table->foreign('meeting_id')
                ->references('id')
                ->on('tbm_meetings')
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
        Schema::dropIfExists('tbm_races');
    }
}
