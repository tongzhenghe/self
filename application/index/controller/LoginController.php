<?php

namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Request;

class LoginController extends Controller
{
    public function login()
    {
        if (\request()->isPost()) {
            $userInfo = input('post.');
            if(!captcha_check($userInfo['captcha'])){
                $this->error('验证码有误');
            }
            $user = Db::table('self')->where(['email'=>$userInfo['email']])->find();
            if ($user) {
                if ($user['password'] === md5($userInfo['password'])) {
                    session('email',$userInfo['email']);
                    $this->success('登录成功','index/index/index');
                }
            }
        }
        return $this->fetch();


    }

//    public function test()
//    {
//        $id = 1;
//        $data = "select * from self WHERE id={$id}";
//        $sql = mysqli_fetch_assoc($data);
//        dump($sql);
//    }
}
