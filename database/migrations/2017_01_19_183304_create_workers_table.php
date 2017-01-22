<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sid')->unique();
            $table->string('agent');
            $table->string('name');
            $table->string('husband_or_father');
            $table->string('nationality');
            $table->date('dob');
            $table->string('present_address');
            $table->string('permanenet_address');
            $table->string('mobile_no');
            $table->string('family_mobile_no');
            $table->string('voter_id_no');
            $table->string('passport_no');
            $table->date('passport_issue_date');
            $table->date('passport_expiry_date');
            $table->string('passport_scan_copy');
            $table->string('photo');
            $table->string('experience_details');
            $table->string('agency_in_bd');
            $table->string('agency_abroad');
            $table->string('medical_report');
            $table->string('training_report');
            $table->string('finger_report');
            $table->string('man_power_report');
            $table->string('visa_report');
            $table->string('attestion_number_date');
            $table->string('flight_date');
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
        Schema::dropIfExists('workers');
    }
}
