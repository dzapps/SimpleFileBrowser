<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/30 0030
 * Time: 15:15
 */

namespace helpers;

class StringHelper {

    public static function encode($str) {

        return htmlspecialchars($str);

    }

}