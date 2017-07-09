<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Models\Admin\UserModel;

/**
 * Class LoginController 登录控制器
 * @package App\Http\Controllers\Admin
 */
class LoginController extends Controller
{
    //登录方法
    public function login(Request $request) //$request是Request类的实例化
    {
        if ($request->isMethod('post')){ //判断是否是post提交
            //获取表单提交的数据
            $data = $request->all();
            //定义验证码的验证规则
            $vali = [
                'captcha'=>'required|captcha'
            ];
            //定义验证码的错误提示信息
            $message = [
                'captcha.required'=>'you must write the captcha',
                'captcha.captcha' =>'the captcha is wrong',
            ];
            //调用Validator 类进行验证码的验证
            $validator = Validator::make($data,$vali,$message);
            if ($validator->fails()){
                return back()->withErrors($validator);
            }else{
                //若验证码输入正确则调用模型中的方法验证用户名和密码
                $res = UserModel::checkUser($data);
                if ($res){
                    echo '登录成功';
                    var_dump($res);
                }else{
                    echo '用户名或密码错误';
                }
            }
        }else{
            //第一步加载登录视图
            return view('admin.login');
        }
        
    }
}
