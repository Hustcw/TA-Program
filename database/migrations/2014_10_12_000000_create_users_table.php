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
            $table->increments('id');//自增的id 方便关联名
            $table->string('student_id')->nullable()->index();//学号
            $table->string('username');//用户名
            $table->string('email')->unique();//邮箱
            $table->string('password',100);//密码
            $table->string('realname')->nullable();//真实姓名
            $table->boolean('is_ta')->default(false);//是否为助教
            $table->integer('ta_course')->default(0);//助教默认课程号
            $table->rememberToken();
            $table->timestamps();//时间戳
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
