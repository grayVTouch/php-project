<?php
/**
 * Created by PhpStorm.
 * User: grayVTouch
 * Date: 2018/7/5
 * Time: 14:43
 */

use Core\App;


// 获取语言包配置文件
function lang($key , $args = []){
    return config(LANG_DIR , $key , $args);
}

// 获取配置文件
function config($key , $args = []){
    return _config_(CONFIG_DIR , $key , $args);
}

// 应用实例
function app(){
    return App::instance('app');
}

// 数据库实例
function db(){
    return app()->instance('db');
}