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
            $table->string('menu_content');
            $table->string('menu_image_name')->nullable();
            $table->string('calorie')->nullable();
            $table->string('carbs')->nullable();
            $table->string('protein')->nullable();
            $table->string('fat')->nullable();
            $table->string('salt')->nullable();
            //$table->foreignId('shop_id')->constrained();  
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
