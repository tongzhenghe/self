<?php
namespace app\index\controller;
use app\index\model\Category;
use app\index\model\Photo_wall;
use Qiniu\Auth;
use Qiniu\Storage\BucketManager;
use Qiniu\Storage\UploadManager;
use think\Controller;
use think\Db;
use think\Request;

class IndexController extends Controller
{
    public function index()
    {
        $email = session('email');
        if ($email) {
            $uName = Db::table('self')->where(['email' => $email])->field('uname')->find();
            $this->assign('uName', $uName);
            return $this->fetch('index');
        } else {
            $this->error('请登录', 'index/login/login');
        }
    }
    /*beijing*/
    public function photoBeijing()
    {
        /*七牛临时域名*/
        $domain = "http://ouk9h3ujg.bkt.clouddn.com";
        $model = new Photo_wall();
        /*获取七牛数据*/
        $ret = $model->getQiniu();
        //dump($ret);exit;
        $this->assign('ret', $ret);
        $this->assign('domain', $domain);
        return $this->fetch('photoBeijing');
    }
    /*甘肃*/
    public function photoGansu()
    {
        /*七牛临时域名*/
        $domain = "http://ouk9h3ujg.bkt.clouddn.com";
        $model = new Photo_wall();
        /*获取七牛数据*/
        $ret = $model->getQiniu();
        //dump($ret);exit;
        $this->assign('ret', $ret);
        $this->assign('domain', $domain);
        return $this->fetch('photoGansu');
    }
    /*成都*/
    public function photoChengdu()
    {
        /*七牛临时域名*/
        $domain = "http://ouk9h3ujg.bkt.clouddn.com";
        $model = new Photo_wall();
        /*获取七牛数据*/
        $ret = $model->getQiniu();
        //dump($ret);exit;
        $this->assign('ret', $ret);
        $this->assign('domain', $domain);
        return $this->fetch('photoChengdu');
    }
    /*西安*/
    public function photoXian()
    {
        /*七牛临时域名*/
        $domain = "http://ouk9h3ujg.bkt.clouddn.com";
        $model = new Photo_wall();
        /*获取七牛数据*/
        $ret = $model->getQiniu();
        //dump($ret);exit;
        $this->assign('ret', $ret);
        $this->assign('domain', $domain);
        return $this->fetch('photoXian');
    }
    /*老家*/
    public function photoLaojia()
    {
        /*七牛临时域名*/
        $domain = "http://ouk9h3ujg.bkt.clouddn.com";
        $model = new Photo_wall();
        /*获取七牛数据*/
        $ret = $model->getQiniu();
        //dump($ret);exit;
        $this->assign('ret', $ret);
        $this->assign('domain', $domain);
        return $this->fetch('photoLaojia');
    }
    /*酒泉*/
    public function photoJiuquan()
    {
        /*七牛临时域名*/
        $domain = "http://ouk9h3ujg.bkt.clouddn.com";
        $model = new Photo_wall();
        /*获取七牛数据*/
        $ret = $model->getQiniu();
        //dump($ret);exit;
        $this->assign('ret', $ret);
        $this->assign('domain', $domain);
        return $this->fetch('photoJiuquan');
    }
    /*随时随拍*/
    public function photoOther()
    {
        /*七牛临时域名*/
        $domain = "http://ouk9h3ujg.bkt.clouddn.com";
        $model = new Photo_wall();
        /*获取七牛数据*/
        $ret = $model->getQiniu();
        //dump($ret);exit;
        $this->assign('ret', $ret);
        $this->assign('domain', $domain);
        return $this->fetch('photoJiuquan');
    }
    /*添加照片分类*/
    public function cateGory()
    {
        if ($this->request->isPost()) {
            $data = input('post.');
            $model = new Category();
            $model->name = $data['cateGory'];
            $model->intro = $data['intro'];
            $model->create_time = time();
            $model->save();
            $this->success('添加成功','index/index');
        } else {
            return $this->fetch();
        }
    }

    /*照片墙*/
    public function photo()
    {
        /*七牛云配置*/
        $accessKey = "GyRNA6SodIxZNHPw96aZFSObOmpG40voayV_id3l";
        $secretKey = "uylLO4dTgS76_dc_s6D-oPxquLNbMDxy-bSB4mZJ";
        $bucket = "yiishop";
        $domain = "http://ouk9h3ujg.bkt.clouddn.com";
        $model = new Photo_wall();
        if (request()->isPost()) {
            $data = input('post.');
            if ($data) {
                $model->title = $data['title'];
                $model->intro = $data['intro'];
                $model->create_time = time();
//                $files = request()->file('path');
//                //dump($files);exit;
//                foreach ($files as $file) {
//                    // 移动到框架应用根目录/public/uploads/ 目录下
//                    $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
//                    if ($info) {
//                        $model->path = $info->getFilename();
//                        // 成功上传后 获取上传信息
//                        // 输出 jpg
//                        //echo $info->getExtension();
//                        // 输出 42a79759f284b767dfcb2a0197904287.jpg
//                        //echo $info->getFilename();
//                    } else {
//                        // 上传失败获取错误信息
//                        echo $file->getError();
//                    }
//                }
                //dump($data['cateGory']);exit;
                /* 七牛云上传文件*/
                $file = request()->file('path');
                if ($file) {
                    // 要上传图片的本地路径
                    $filePath = $file->getRealPath();
                    //dump($filePath);exit;
                    $ext = pathinfo($file->getInfo('name'), PATHINFO_EXTENSION);  //后缀
                    //获取当前控制器名称
                    //$controllerName=Request::instance()->controller();
                    // 上传到七牛后保存的文件名
                    $key =substr(md5($file->getRealPath()) , 0, 5). date('YmdHis') . rand(0, 9999) . $data['cateGory'].'.' . $ext;
                    //dump($key);EXIT;
                    // 需要填写你的 Access Key 和 Secret Key
                    //$accessKey = config('ACCESSKEY');
                    //$secretKey = config('SECRETKEY');
                    // 构建鉴权对象
                    $auth = new Auth($accessKey, $secretKey);
                    //dump($auth);exit;
                    //dump($auth);exit;
                    // 要上传的空间
                    //$bucket = config('BUCKET');
                    //$domain = config('DOMAINImage');
                    $token = $auth->uploadToken($bucket);
                    // 初始化 UploadManager 对象并进行文件的上传
                    $uploadMgr = new UploadManager();
                    //dump($uploadMgr);exit;
                    // 调用 UploadManager 的 putFile 方法进行文件的上传
                    list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
                    //dump($err);exit;
                    if ($err !== null) {
                        return ["err"=>1,"msg"=>$err,"data"=>""];
                    } else {
                        //dump($domain . '/'.$ret['key']);exit;
                        //返回图片的完整URL
                        redirect('index/photo');
                        //return json(["err"=>0,"msg"=>"上传完成","data"=>($domain . '/'.$ret['key'])]);
                    }
                }
            }
            if ($model->save()) {
                $this->success('上传成功', 'index/index/index');
            }
        } else {
            $cateGory = Category::all();
            $this->assign('cateGory',$cateGory);
            return $this->fetch('photo');
        }

    }

    /*测试七牛云*/
    public function qiniu()
    {
        $accessKey = "GyRNA6SodIxZNHPw96aZFSObOmpG40voayV_id3l";
        $secretKey = "uylLO4dTgS76_dc_s6D-oPxquLNbMDxy-bSB4mZJ";
        $bucket = "yiishop";
        $domain = "http://ouk9h3ujg.bkt.clouddn.com";
//        'DOMAIN' = 'http://images.zyglz.com/';//空间绑定的域名
        if(request()->isPost()){
            $file = request()->file('image');
            // 要上传图片的本地路径
            $filePath = $file->getRealPath();
            //dump($filePath);exit;
            $ext = pathinfo($file->getInfo('name'), PATHINFO_EXTENSION);  //后缀
            //获取当前控制器名称
            //$controllerName=Request::instance()->controller();
            // 上传到七牛后保存的文件名
            $key =substr(md5($file->getRealPath()) , 0, 5). date('YmdHis') . rand(0, 9999) . '.' . $ext;
            //dump($key);EXIT;
            // 需要填写你的 Access Key 和 Secret Key
//            $accessKey = config('ACCESSKEY');
//            $secretKey = config('SECRETKEY');
            // 构建鉴权对象
            $auth = new Auth($accessKey, $secretKey);
            //dump($auth);exit;
            // 要上传的空间
            //$bucket = config('BUCKET');
            //$domain = config('DOMAINImage');
            $token = $auth->uploadToken($bucket);
            // 初始化 UploadManager 对象并进行文件的上传
            $uploadMgr = new UploadManager();
//            dump($uploadMgr);exit;
            // 调用 UploadManager 的 putFile 方法进行文件的上传
            list($ret, $err) = $uploadMgr->putFile($token, $key, $filePath);
            //dump($err);exit;
            if ($err !== null) {
                return ["err"=>1,"msg"=>$err,"data"=>""];
            } else {
                //返回图片的完整URL
                return json(["err"=>0,"msg"=>"上传完成","data"=>($domain . '/'.$ret['key'])]);
            }
        } else {
            return $this->fetch('qiniuyun');
        }
    }


    /*测试获取七牛云数据*/
    public function getQ()
    {
        $accessKey = "GyRNA6SodIxZNHPw96aZFSObOmpG40voayV_id3l";
        $secretKey = "uylLO4dTgS76_dc_s6D-oPxquLNbMDxy-bSB4mZJ";
        $bucket = "yiishop";
        /*七牛临时域名*/
        $domain = "http://ouk9h3ujg.bkt.clouddn.com";
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
        $limit = 100;
        $delimiter = '/';
        // 列举文件
        list($ret, $err) = $bucketManager->listFiles($bucket, $prefix, $marker, $limit, $delimiter);
        //dump($domain.'/'.$ret['items'][0]['key']);exit;
        if ($err !== null) {
            echo "\n====> list file err: \n";
            var_dump($err);
        } else {
           //dump($ret);exit;
            if (array_key_exists('marker', $ret)) {
                echo "Marker:" . $ret["marker"] . "\n";
            }
            echo "\nList Iterms====>\n";
            //var_dump($ret['items']);
        }
    }

}
