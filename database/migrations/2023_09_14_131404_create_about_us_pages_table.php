<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us_pages', function (Blueprint $table) {
            $table->id();
            $table->longText('description')->nullable();
            $table->string('image')->nullable();

            $table->string('sec_1_headline')->nullable();
            $table->longText('sec_1_desc')->nullable();
            $table->string('sec_1_link')->nullable();
            $table->string('sec_1_image')->nullable();
            
            $table->string('sec_2_image')->nullable();
            $table->string('sec_2_box_text')->nullable();
            $table->string('sec_2_headline')->nullable();
            $table->longText('sec_2_desc')->nullable();
            $table->string('sec_2_link')->nullable();

            $table->string('sec_3_box_text')->comment('round box')->nullable();
            $table->string('sec_3_headline')->nullable();

            $table->string('sec_3_box_1_headline')->nullable();
            $table->string('sec_3_box_1_detl')->nullable();
            $table->string('sec_3_box_2_headline')->nullable();
            $table->string('sec_3_box_2_detl')->nullable();
            $table->string('sec_3_box_3_headline')->nullable();
            $table->string('sec_3_box_3_detl')->nullable();
            $table->string('sec_3_box_4_headline')->nullable();
            $table->string('sec_3_box_4_detl')->nullable();
            $table->string('sec_3_image')->nullable();

            $table->string('sec_4_image')->nullable();
            $table->string('sec_4_headline')->nullable();
            $table->string('sec_4_link1')->nullable();
            $table->string('sec_4_link2')->nullable();
            $table->string('sec_4_link3')->nullable();

            $table->timestamps();
        });
        DB::table('about_us_pages')->insert([
            [
                'description' => '',
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
        Schema::dropIfExists('about_us_pages');
    }
};
