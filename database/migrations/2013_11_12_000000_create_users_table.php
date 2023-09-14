<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

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
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique()->nullable();
            $table->string('contact_no')->unique();
            $table->unsignedBigInteger('role_id')->index()->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->string('password');
            $table->string('image')->nullable();
            $table->boolean('status')->default(1)->comment('1=>active 2=>Logged 0 => Inactive');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('users')->insert([
            [
                'name' => 'Superadmin',
                'username' => 'superadmin',
                'email' => 'superadmin@email.com',
                'contact_no' => '01600000000',
                'password' => sha1(md5('superadmin')),
                'role_id' => 1,
                'status' => 1,
                'created_by' => 1,
                'created_at' => Carbon::now()
            ],
        ]);
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
