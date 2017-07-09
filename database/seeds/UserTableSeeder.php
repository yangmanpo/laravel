<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //使用DB中的insert方法插入数据
        //利用for循环添加多条数据
//        for ($i = 1; $i <= 50; $i++) {
            DB::table('user')->insert([
                'name' => 'admin',
                'password' => encrypt('admin'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
//        }
    }
}
