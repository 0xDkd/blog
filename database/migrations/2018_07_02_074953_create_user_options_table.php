<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_options', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_option_key')->index()->comment('用户设置的key');
            $table->string('user_option_value')->comment('用户设置的value 值');
            $table->integer('user_id')->unsigned()->index()->default(0)->comment('用户id作为外键查询');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_options');
    }
}
