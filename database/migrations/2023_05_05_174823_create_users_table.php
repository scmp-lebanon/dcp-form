<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Fname');
            $table->string('Lname');
            $table->string('pwd');
            $table->bigInteger('mobile');
            $table->bigInteger('mobile2');
            $table->string('email');
            $table->string('country');
            $table->string('region');
            $table->string('city');
            $table->string('bldgFloor');
            $table->string('gender');
            $table->timestamp('createdAt')->useCurrent();
            $table->timestamp('updatedAt')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->bigInteger('clientTypeId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('users');
    }
};
