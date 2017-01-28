<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agent');
            $table->bigInteger('commission');
            $table->integer('compensation_amount')->nullable();
            $table->date('compensation_date')->nullable();
            $table->string('compensation_reference')->nullable();
            $table->text('compensation_remarks')->nullable();
            $table->integer('advance_amount')->nullable();
            $table->date('advance_date')->nullable();
            $table->string('advance_reference')->nullable();
            $table->text('advance_remarks')->nullable();
            $table->bigInteger('due_amount');
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
        Schema::dropIfExists('accounts');
    }
}
