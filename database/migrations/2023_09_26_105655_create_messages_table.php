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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('overview_headline')->nullable();
            $table->text('overview')->nullable();
            $table->string('overview_image')->nullable();
            $table->string('founder_headline')->nullable();
            $table->text('founder_msg')->nullable();
            $table->string('founder_image')->nullable();
            $table->string('chairman_headline')->nullable();
            $table->text('chariman_msg')->nullable();
            $table->string('chairman_image')->nullable();
            $table->string('md_headline')->nullable();
            $table->text('md_msg')->nullable();
            $table->string('md_image')->nullable();
            $table->string('mission_vission_headline')->nullable();
            $table->text('mission_vission')->nullable();
            $table->string('mission_vission_image')->nullable();
            $table->string('key_management_headline')->nullable();
            $table->text('key_management')->nullable();
            $table->string('key_management_image')->nullable();
            $table->string('csr_headline')->nullable();
            $table->text('csr')->nullable();
            $table->string('csr_image')->nullable();
            $table->timestamps();
        });
        DB::table('messages')->insert([
            [
                'overview' => '',
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
        Schema::dropIfExists('messages');
    }
};
