<?php
/**
 * Created by PhpStorm.
 * User: grayVTouch
 * Date: 2018/11/27
 * Time: 11:40
 */

class A {
    public static $name = 'hello';
    public static function getName(){
        var_dump(self::$name);
    }
}

class B extends A {
    public static function t(){
        var_dump(self::$name);
    }
}

B::t();

A::$name = 'cao';

B::t();

