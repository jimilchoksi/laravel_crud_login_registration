<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students',function($table){
            $table->text('address')->nullable()->change();
            $table->string('telephone_number',20)->nullable()->change();
            $table->string('mobile_number',20)->nullable()->change();
            $table->string('school_name')->nullable()->change();
            $table->string('class',20)->nullable()->change();
            $table->string('medium',20)->nullable()->change();
            $table->date('birthdate')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('students',function($table){
            $table->text('address')->nullable(false)->change();
            $table->string('telephone_number')->nullable(false)->change();
            $table->string('mobile_number')->nullable(false)->change();
            $table->string('school_name')->nullable(false)->change();
            $table->string('class')->nullable(false)->change();
            $table->string('medium')->nullable(false)->change();
            $table->date('birthdate')->nullable(false)->change();
        });
    }
}
