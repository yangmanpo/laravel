<?php

namespace App\Http\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

/**
 * Class UserModel 用户表模型
 * @package App\Http\Models\Admin
 */
class UserModel extends Model
{
    //指定对应的数据表
    protected $table = 'user';

    //验证用户名和密码的方法
    public static function checkUser($user)  //传入用户数据
    {
        //验证规则
        $vali = [
            'name' => 'required',
            'password' => 'required'
        ];
        $message = [
            'name.required'    =>'用户名不能为空',
            'password.required'=>'密码不能为空',
        ];
        //调用Validator类中的方法验证
        $validator = Validator::make($user, $vali,$message);
        if ($validator->fails()) {
            back()->withErrors($validator);
        } else {
            //判断用户名密码是否匹配
            if ($data = self::where('name',$user['name'])->first()){
                if (decrypt($data->password)==$user['password']){
                    return $data;
                }
            }
            return false;
        }
    }
}
