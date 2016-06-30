<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/29 0029
 * Time: 15:01
 */

function SFB_autoload($class) {

    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = getcwd() . DIRECTORY_SEPARATOR . $class . '.php';
    if(is_file($file)) {
        include $file;
    }

}

spl_autoload_register('SFB_autoload');