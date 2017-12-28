<?php

namespace app\wechat\controller;
use think\Controller;
use EasyWeChat\Factory;

class WechatController extends Controller
{
    /**
     * 显示资源列表
     *http://www.m.dev/wechat/pay/wechat
     * @return \think\Response
     */
    public function wechat()
    {
        $config = [
            'debug' => true,
            'app_id' => 'wxe287cf3729d33103',
            'secret' => '7fa28f387b7f9369ab9c06cc5c585f71',

            // 指定 API 调用返回结果的类型：array(default)/collection/object/raw/自定义类名
            'response_type' => 'array',

            'log' => [
                'level' => 'debug',
                'file' => __DIR__.'/wechat.log',
            ],
        ];
        $app = Factory::officialAccount($config);
//        $app->server->push(function ($message) {
//            // $message['FromUserName'] // 用户的 openid
//            // $message['MsgType'] // 消息类型：event, text....
//            return "您好！欢迎使用 EasyWeChat";
//        });
        $response = $app->server->serve();
// $response 为 `Symfony\Component\HttpFoundation\Response` 实例
// 对于需要直接输出响应的框架，或者原生 PHP 环境下
        $response->send();

    }
}
