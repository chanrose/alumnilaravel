<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->increments('AID');
            $table->string('Fname', 200);
            $table->string('Lname', 200);
            $table->integer('IDNum');
            $table->date('DoB');
            $table->string('Email', 200);
            $table->string('Pnumber', 200);
            $table->string('Program', 100);
            $table->string('Faculty', 100);
            $table->string('Major', 100);
            $table->integer('CreditEarned');
            $table->string('AdvisorName', 200);
            $table->string('Minor', 100);
            $table->text('ResidentialAddress');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alumni', function (Blueprint $table) {
            //
        });
    }
}
