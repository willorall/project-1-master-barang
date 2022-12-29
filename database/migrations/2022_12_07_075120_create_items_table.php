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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('code',10);
            $table->string('item_name',50);
            $table->string('unit',10);
            $table->bigInteger('id_price_list')->nullable();
            $table->enum('status', [0, 1]); 
            $table->enum('status_master', [0, 1])->default('0'); 
            $table->enum('type', [1, 2, 3]);
            $table->text('description')->nullable();
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
        Schema::dropIfExists('items');
    }
};
