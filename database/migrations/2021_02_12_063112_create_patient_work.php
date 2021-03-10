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
            $table->text('work_code')->unique();
            $table->foreignId('doctor_id');
            $table->integer('age');
            $table->text('abutments')->nullable();
            $table->foreignId('pontic_design')->nullable();
            $table->text('patient_name');
            $table->text('tooth_Number');
            $table->foreignId('work_id');
            $table->foreignId('shade');
            $table->date('warranty_expiry_date')->nullable();
            $table->integer('flag')->default(0);
            $table->timestamps();

            $table->foreign('doctor_id')
            ->references('id')
            ->on('doctors')
            ->onDelete('cascade');

            $table->foreign('work_id')
            ->references('id')
            ->on('work_item')
            ->onDelete('cascade');

            $table->foreign('shade')
            ->references('id')
            ->on('tooth_shade')
            ->onDelete('cascade');

            $table->foreign('pontic_design')
            ->references('id')
            ->on('pontic_design')
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
        Schema::dropIfExists('patient_work');
    }
}
