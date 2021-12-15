<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmFormDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbm_form_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('runner_id')->index();
            $table->string('name', 255);
            $table->enum('stage', array(1, 2, 3, 4))->nullable()->default(null);
            $table->timestamps();

            $table->foreign('runner_id')
                ->references('id')
                ->on('tbm_runners')
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
        Schema::dropIfExists('tbm_form_data');
    }
}
