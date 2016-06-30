<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/30 0030
 * Time: 15:18
 */

namespace helpers;

class UrlHelper {

    public static function to($path) {
        return ENTRANCE_URL . '?p=' . $path;
    }

}