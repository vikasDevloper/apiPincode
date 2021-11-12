<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableData extends Migration
{                     

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datas', function (Blueprint $table) {
            $table->increments('id');
          $table->string('officename');
          $table->string('pincode');
          $table->string('officeType');
          $table->string('Deliverystatus');
          $table->string('divisionname');
          $table->string('regionname');
          $table->string('circlename');
          $table->string('Taluk');
          $table->string('Districtname');
          $table->string('statename');
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
        Schema::dropIfExists('datas');
    }
}
