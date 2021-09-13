<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('dateofbirth');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('nid')->unique()->nullable();
            $table->string('gender');
            $table->string('admissionclass');
            $table->string('fathername');
            $table->string('fatheroccupation');
            $table->string('fnid')->unique();
            $table->string('mothername');
            $table->string('motheroccupation');
            $table->string('mid')->unique();
            $table->string('parentscontact')->unique();
            $table->string('parentscontactsecond')->unique()->nullable();
            $table->longText('paddress');
            $table->longText('parmanentaddress');
            $table->longText('health');
            $table->string('studentpic');
            $table->string('parentpic');

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
        Schema::dropIfExists('admissions');
    }
}
