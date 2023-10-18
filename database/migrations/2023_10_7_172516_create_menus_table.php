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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('menu_name');
            $table->mediumblob('menu_image_name');
            $table->varchar('image_type');
            $table->int('image_size');
            $table->string('calorie')
            $table->string('carbs')
            $table->string('protein')
            $table->string('fat')
            $table->string('salt')
            $table->foreignId('shop_id')->constrained();  
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
};
