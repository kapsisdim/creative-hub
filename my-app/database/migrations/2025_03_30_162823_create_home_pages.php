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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('main_video_link');
            $table->longText('logo_image');
            $table->longText('footer_logo_image');
            $table->longText('we_create_title');
            $table->longText('we_create_text');
            $table->longText('our_clients_title');
            $table->longText('our_clients_text');
            $table->longText('contact_title');
            $table->longText('contact_text');
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
        Schema::dropIfExists('home_pages');
    }
};
