<?php

namespace app\index\model;

use Qiniu\Auth;
use Qiniu\Storage\BucketManager;
use think\Model;

class Photo_wall extends Model
{
    public function getQiniu()
    {

        /*==获取七牛云文件==*/
        $accessKey = "GyRNA6SodIxZNHPw96aZFSObOmpG40voayV_id3l";
        $secretKey = "uylLO4dTgS76_dc_s6D-oPxquLNbMDxy-bSB4mZJ";
        $bucket = "yiishop";
        /*七牛临时域名*/
        //$accessKey = getenv('QINIU_ACCESS_KEY');
        //$secretKey = getenv('QINIU_SECRET_KEY');
        //$bucket = getenv('QINIU_TEST_BUCKET');
        $auth = new Auth($accessKey, $secretKey);
        $bucketManager = new BucketManager($auth);
        //dump($bucketManager);exit;
        // 要列取文件的公共前缀
        $prefix = '';
        // 上次列举返回的位置标记，作为本次列举的起点信息。
        $marker = '';
        // 本次列举的条目数
        $limit = 10000;
        //$delimiter = '/';
        // 列举文件
        list($ret, $err) = $bucketManager->listFiles($bucket, $prefix, $marker, $limit);
        if ($err !== null) {
            echo "\n====> list file err: \n";
            var_dump($err);
        } else {
            //dump($domain.'/'.$ret['items'][10]['key']);exit;
            if (array_key_exists('marker', $ret)) {
                echo "Marker:" . $ret["marker"] . "\n";
            }
            /*测试匹配文件*/
            //$pipei = '/\w.(北京)\.(jpg|png)$/';
            //$result = preg_match_all($pipei,$ss);
            //dump(mb_substr($ss3,0,23));exit;
            //echo "\nList Iterms====>\n";
            //var_dump($ret['items']);
        }
        return $ret;


    }
}
