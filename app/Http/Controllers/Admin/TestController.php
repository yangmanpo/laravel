<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Models\Admin\TestModel;

/**
 * Class TestController 测试控制器
 * @package App\Http\Controllers\Admin
 */
class TestController extends Controller
{
    //测试方法
    public function test()
    {
        //利用DB类中的方法测试数据库的链接情况 查询所有的结果 结果集
//       $data = DB::table('test')->get();
        //查询出一行数据 对象
//         $data = DB::table('test')->where('name','=','xuxu')->first();
        //查询单个结果 字符串
//        $data = DB::table('test')->where('name','=','manpo')->value('name');
        //查询范围中的数据
//        $data =  DB::table('test')->whereBetween('id',['2','4'])->first();
//        var_dump($data);
    }

    //使用模型进行查询
    public function modelSel()
    {
        $data = TestModel::get();
        $data = TestModel::whereBetween('id',['1','3'])->get();
        dd($data);
    }
}
