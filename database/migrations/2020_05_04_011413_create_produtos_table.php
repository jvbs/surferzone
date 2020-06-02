<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->double('price', 8, 2);
            $table->text('description');
            $table->string('img');
            $table->smallInteger('discount');
            $table->smallInteger('size_id');
            $table->smallInteger('brand_id');
            $table->smallInteger('color_id');
            $table->smallInteger('category_id');
            $table->smallInteger('stock');
            $table->timestamps();

            $table->index('category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
