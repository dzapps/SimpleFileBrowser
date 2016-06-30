<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/29 0029
 * Time: 15:00
 */

namespace exceptions;

class DirNotFoundException extends \Exception {

    public function __construct($dir, $code = 0, $previous = NULL)
    {
        $message = $dir . ' not found';
        parent::__construct($message, $code, $previous);
    }

}