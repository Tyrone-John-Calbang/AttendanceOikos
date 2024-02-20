<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id('employee_id');
            $table->string('fname');
            $table->string('lname');
            $table->string('minitial')->nullable();
            $table->string('extension')->nullable();
            $table->string('email');
            $table->string('bday')->nullable();
            $table->string('address');
            $table->string('phone_number');
            $table->string('telephone_number')->nullable();
            $table->integer('age');
            $table->string('date_employed');
            $table->string('gender');
            $table->string('city')->nullable();
            $table->string('region')->nullable();
            $table->integer('postal_code')->nullable();
            $table->string('country')->nullable();
            $table->string('nationality');
            $table->string('position');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
