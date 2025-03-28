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
        Schema::create('image_uploads_portfolio_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('portfolio_category_id');
            $table->unsignedBigInteger('image_upload_id');

            $table->foreign('portfolio_category_id')->references('id')->on('portfolio_categories');
            $table->foreign('image_upload_id')->references('id')->on('image_uploads');
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
        Schema::dropIfExists('image_uploads_portfolio_categories');
    }
};
