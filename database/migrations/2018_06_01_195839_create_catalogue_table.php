<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatalogueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

      Schema::create('categories', function (Blueprint $table) {
          $table->increments('id');
          $table->string('categoryName', 100)->unique();
          $table->integer('numberCat')->unsigned();
      });

      Schema::create('subcategories', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idCategory')->unsigned();
          $table->string('subCategoryName', 100);
          $table->integer('startNumberSubCat')->unsigned();
          $table->foreign('idCategory')->references('id')->on('categories')->onDelete('cascade');

      });

      Schema::create('descriptionExpenses', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('idSubCategory')->unsigned();
          $table->string('description', 100);
          $table->integer('numberId')->unsigned();
          $table->foreign('idSubCategory')->references('id')->on('subcategories')->onDelete('cascade');

      });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

      //the correct order is first delete the child table after parent
        Schema::dropIfExists('descriptionExpenses');
        Schema::dropIfExists('subcategories');
        Schema::dropIfExists('categories');

    }
}
