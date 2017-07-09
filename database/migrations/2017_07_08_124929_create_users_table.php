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
        //通过schema和blueprint创建数据表
        Schema::create('user',function (Blueprint $blueprint){
                $blueprint->mediumIncrements('id');
                $blueprint->string('name',20);
                $blueprint->string('password');
                $blueprint->timestamps();
                $blueprint->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //执行回滚如果表存在删除动作
        Schema::dropIfExists('user');
    }
}
