<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->engine = 'InnoDB';
          $table->increments('id');
          $table->integer('idDescription')->unsigned();
          $table->string('itemName', 50)->unique();
          $table->integer('quantity')->unsigned();
          $table->string('unity', 50);
          $table->integer('price');
          $table->timestamps();
          $table->foreign('idDescription')->references('id')->on('descriptionExpenses');

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
