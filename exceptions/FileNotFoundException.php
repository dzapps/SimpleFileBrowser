<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/29 0029
 * Time: 16:16
 */

namespace exceptions;

class FileNotFoundException extends \Exception {

    public function __construct($file, $code = 0, $previous = NULL)
    {
        $message = $file . ' is not found';
        parent::__construct($message, $code, $previous);
    }

}