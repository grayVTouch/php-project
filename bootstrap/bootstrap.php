<?php
/**
 * Created by PhpStorm.
 * User: grayVTouch
 * Date: 2018/11/16
 * Time: 12:06
 */

/**
 * **************
 * 定义相关系统路径
 * **************
 */
const ROOT_DIR      = __DIR__ . '/../';
const LANG_DIR      = ROOT_DIR . 'lang/';
const CORE_DIR      = ROOT_DIR . 'core/';
const CONFIG_DIR = ROOT_DIR . 'config/';
const COMMON_DIR = ROOT_DIR . 'common/';

/**
 * *****************
 * 加载第三方依赖
 * *****************
 */

/**
 * *****************
 * 注册自动加载
 * *****************
 */
require_once CORE_DIR . 'Util/Autoload.php';

use Core\Util\Autoload;

$autoload = new Autoload();
$autoload->register([
    'class' => [
        'Core\\' => CORE_DIR ,
    ] ,
    // 加载文件
    'file' => [
        // 基本依赖
        CORE_DIR . 'Function/base.php' ,
        CORE_DIR . 'Function/array.php' ,
        CORE_DIR . 'Function/file.php' ,
        CORE_DIR . 'Function/string.php' ,
        CORE_DIR . 'Function/time.php' ,
        CORE_DIR . 'Function/number.php' ,

        // 系统依赖
        COMMON_DIR . 'currency.php' ,
        COMMON_DIR . 'lib.php' ,
        COMMON_DIR . 'tool.php' ,
    ]
]);

// 实例化 App 类
use Core\App;

// 实例化 app
$app = new App();

// 运行程序
$app->run()->terminate();


