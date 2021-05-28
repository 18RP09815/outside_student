<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOutsidePermissionTblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('outside_permission_tbls', function (Blueprint $table) {
            $table->increments('permission_id');
            $table->string('registration_number');
            $table->string('landlord_names');
            $table->string('landlord_phone_number');
            $table->string('landlord_ID_number');
            $table->string('gender');
            $table->string('current_village');
            $table->string('current_cell');
            $table->string('current_sector');
            $table->string('academic_year');
            $table->text('contract');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('outside_permission_tbls');
    }
}
