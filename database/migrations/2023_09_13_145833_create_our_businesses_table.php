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
        Schema::create('our_businesses', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('heading_text');
            $table->longText('description')->nullable();
            $table->string('link')->nullable();

            //$table->string('page_title')->index()->unique();
            $table->string('page_slug')->index()->unique();
            $table->string('page_image')->nullable();

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

            $table->longText('gallery_id')->nullable();
            $table->longText('map')->nullable();

            $table->string('footer_email')->nullable();
            $table->string('footer_contact')->nullable();

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
        Schema::dropIfExists('our_businesses');
    }
};
