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
            $table->string('Fname', 30);
            $table->string('Lname', 30);
            $table->integer('IDNum');
            $table->string('Gender', 50);
            $table->string('Nationality', 50);
            $table->date('DoB');
            $table->string('Email', 50);
            $table->string('Pnumber', 20);
            $table->string('Program', 50);
            $table->string('Faculty', 50);
            $table->string('Major', 50);
            $table->integer('CreditEarned');
            $table->string('AdvisorName', 60);
            $table->string('Minor', 50);
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
