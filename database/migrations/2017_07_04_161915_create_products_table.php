<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');            
            $table->addColumn('integer', 'user_id')->nullable(false);
            //$table->addColumn('string', 'name', ['default' => '']);
            $table->string('name', 100)->default('');
            $table->longText('description');
            $table->addColumn('integer', 'price', ['default' => 0]);
            $table->addColumn('integer', 'category_id', ['lenght' => 3])->nullable(false);
            $table->addColumn('integer', 'subcategory_id', ['lenght' => 3])->nullable(false);
            $table->addColumn('tinyInteger', 'status_id', ['lenght' => 1])->nullable(false);
            $table->addColumn('integer', 'likes', ['default' => 0]);
            $table->addColumn('integer', 'views', ['default' => 0]);
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
        Schema::dropIfExists('products');
    }
}
