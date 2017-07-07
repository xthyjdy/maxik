<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 10);
            $table->string('surname', 20)->default('');
            $table->string('email', 30)->unique();
            $table->integer('phone')->default(0);
            $table->integer('alt_phone')->default(0);
            $table->integer('city_id')->default(0);
            $table->integer('region_id')->default(0);
            $table->addColumn('tinyInteger', 'role_id', ['lenght' => 1])->default(0);
            $table->addColumn('tinyInteger', 'is_active', ['lenght' => 1])->default(0);
            $table->addColumn('tinyInteger', 'lang_id', ['lenght' => 1])->default(0);
            $table->integer('last_visit')->default(0);
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
