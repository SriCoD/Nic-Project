<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExcelDataTablesTable extends Migration
{
    public function up()
    {
        Schema::create('excel_data_tables', function (Blueprint $table) {
            $table->id();
            $table->string('column1');
            $table->string('column2');
            $table->string('column3');
            $table->string('column4');
            $table->string('column5');
            $table->string('column6');
            $table->string('column7');
            $table->string('column8');
            $table->string('column9');
            $table->string('column10');
            $table->string('column11');
            $table->string('column12');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('excel_data_tables');
    }
}
