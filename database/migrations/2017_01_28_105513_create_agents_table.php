<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sid')->nullable()->unique();
            $table->string('name')->nullable();
            $table->string('father_name')->nullable();
            $table->date('dob')->nullable();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('voter_id')->nullable();
            $table->string('passport')->nullable();
            $table->date('passport_issue')->nullable();
            $table->date('passport_expiry')->nullable();
            $table->text('passport_scan')->nullable();
            $table->text('photo')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('agents');
    }
}
