<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            //Big int相应的 migration 代码应该使用 bigIncrements() 方法
            $table->unsignedBigInteger('user_id');
            //定义对应自增 ID 的外键时也需要使用 unsignedBigInteger() 方法
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // 当 user_id 对应的 users 表数据被删除时，删除词条，外键约束
            $table->string('province');
            //字符串类型
            $table->string('city');
            $table->string('district');
            $table->string('address');
            $table->unsignedInteger('zip');
            //unsigned int类型 无符号整数，必为正整数
            $table->string('contact_name');
            $table->string('contact_phone');
            $table->dateTime('last_used_at')->nullable();
            //混合日期和时间值YYYY-MM-DD HH:MM:SS，默认为空
            $table->timestamps();
            //时间戳 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_addresses');
        // 当数据表存在时, 将指定数据表移除
    }
}
