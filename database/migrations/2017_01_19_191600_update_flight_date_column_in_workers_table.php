<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateFlightDateColumnInWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('workers', function (Blueprint $table) {
            $table->dropColumn(['present_address','permanenet_address','attestion_number_date','flight_date']);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('workers', function (Blueprint $table) {
            $table->string('present_address')->after('dob');
            $table->string('permanenet_address')->after('present_address');
            $table->string('attestion_number_date')->after('visa_report');
            $table->string('flight_date')->after('attestion_number_date'); 
        });
    }
}
