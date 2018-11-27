<?php
/**
 * Created by PhpStorm.
 * User: grayVTouch
 * Date: 2018/11/20
 * Time: 15:31
 */

namespace Core;

use Core\Lib\DBConnection;

class App extends Container
{
    function __construct(){
        // 注册基础服务
        $this->_registerService();
    }

    // 绑定基础服务
    protected function _registerService(){
        // 注册应用实例
        self::singleton('app' , $this);
        // 绑定数据库连接
        self::singleton('db' , $this->database());
    }

    // 创建数据库连接
    public function database(){
        $db_config  = config('app.database');
        $config     = config(sprintf('database.%s' , $db_config));
        return new DBConnection($config);
    }

    // todo 程序运行
    public function run(){
        return $this;
    }

    // todo 程序运行结束
    public function terminate(){

    }
}