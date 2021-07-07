<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
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
            $table->string('item_left');
            $table->string('item_right');
            $table->string('code')->unique();
            $table->bigInteger('scale_id')->unsigned();
            $table->foreign('scale_id')->references('id')
                ->on('scales')->onUpdate('cascade')->onDelete('cascade');
            $table->tinyInteger('category');
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
}
