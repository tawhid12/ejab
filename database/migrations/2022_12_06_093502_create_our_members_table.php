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
        Schema::create('our_members', function (Blueprint $table) {
            $table->id();
            $table->string('given_name');
            $table->string('designation')->nullable();
            $table->string('cell_number')->nullable();
            $table->string('email')->unique();
            $table->string('linked_in_profile')->nullable();
            $table->string('facebook_profile')->nullable();
            $table->string('details')->nullable();
            $table->string('image')->nullable();
            $table->integer('show_font')->default(0)->nullable();
            $table->integer('status')->default(0);
            $table->softDeletes();
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
        Schema::dropIfExists('our_members');
    }
};
