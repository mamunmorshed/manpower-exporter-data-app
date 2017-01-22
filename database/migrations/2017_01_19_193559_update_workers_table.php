<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateWorkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('workers', function (Blueprint $table) {
            $table->text('present_address')->after('dob');
            $table->text('permanent_address')->after('present_address');
            $table->date('attestion_number_date')->after('visa_report');
            $table->date('flight_date')->after('attestion_number_date');
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
            $table->dropColumn(['present_address','permanent_address','attestion_number_date','flight_date']);
            
        });
    }
}
