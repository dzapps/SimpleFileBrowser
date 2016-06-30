<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/29 0029
 * Time: 14:53
 */

namespace base;
use exceptions\DirNotFoundException;

class Directory {

    const DS = DIRECTORY_SEPARATOR;

    private $dir = '.';
    private $root;

    public function __construct($root = NULL)
    {
        if($root === NULL) {
            $this->root = rtrim(getcwd(), self::DS);
        } else {
            $this->root = rtrim(realpath($root), self::DS);
        }
    }

    public function getRoot(){
        return $this->root;
    }

    public function setDir($dir = '.') {
        if(!is_dir($dir)) {
            throw new DirNotFoundException($dir);
        }
        $this->dir = $dir;
    }

    public function listDir() {
        $dh = @opendir($this->dir);
        $files = [];
        while(($file = readdir($dh)) !== false) {
            if($file == '.') {
                continue;
            }
            $files[] = [
                'name' => $file,
                'type' => File::getType($file),
                'path' => str_replace($this->root, '', realpath($this->dir) . self::DS . $file),
            ];
        }

        return $files;
    }

}