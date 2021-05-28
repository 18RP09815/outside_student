<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsListTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_list_tbls', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('registration_number');
            $table->string('ID_number');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone_number');
            $table->string('gender');
            $table->string('department');
            $table->string('level');
            $table->string('class');
            $table->string('academic_year');
            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_list_tbls');
    }
}
