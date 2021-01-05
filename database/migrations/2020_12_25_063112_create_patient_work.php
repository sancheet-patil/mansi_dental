<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientWork extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_work', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('work_code');
            $table->foreignId('doctor_id');
            $table->integer('age');
            $table->text('abutments');
            $table->foreignId('pontic_design');
            $table->text('patient_name');
            $table->text('tooth_Number');
            $table->foreignId('work_id');
            $table->foreignId('shade');
            $table->integer('flag')->default(0);
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
        Schema::dropIfExists('patient_work');
    }
}
