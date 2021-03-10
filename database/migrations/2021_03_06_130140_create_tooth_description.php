<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToothDescription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tooth_description', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            $table->text('tooth_Number');
            $table->foreignId('work_id');      
            $table->timestamps();

            $table->foreign('work_id')
            ->references('id')
            ->on('work_item')
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
        Schema::dropIfExists('tooth_description');
    }
}
