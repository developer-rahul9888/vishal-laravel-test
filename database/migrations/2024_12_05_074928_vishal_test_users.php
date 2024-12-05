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
        Schema::create('vishal_test_users', function (Blueprint $table)
        {
            $table->id();
            $table->string('email')->unique()->nullable();
            $table->string('username')->unique()->nullable();
            $table->enum('status',['active','inactive','delete'])->default('active');
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
        //
    }
};
