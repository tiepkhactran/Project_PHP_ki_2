<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('member_id');
            $table->string('member_name')->unique();
            $table->string('email')->unique();
            $table->string('phoneNumber');
            $table->unsignedTinyInteger('gender')->nullable()->default(1);//1. Boy; 2.Girl
            $table->date('birthday')->nullable();
            $table->string('avatar')->default("http://a360-wp-uploads.s3.amazonaws.com/wp-content/uploads/hearingr/2016/12/GIVE-01.png");
            $table->string('password');
            $table->unsignedTinyInteger('status')->default(1);
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
        Schema::dropIfExists('members');
    }
}
