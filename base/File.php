<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/29 0029
 * Time: 16:02
 */

namespace base;

use exceptions\FileNotFoundException;

class File {

    const DIRECTORY = 'directory';
    const TXT = 'txt';
    const JPG = 'jpg';
    const JPEG = 'jpeg';
    const PNG = 'png';
    const GIF = 'gif';
    const DOC = 'doc';
    const PPT = 'ppt';
    const EXCEL = 'xls';
    const MP3 = 'mp3';
    const AUDIO = 'audio';
    const MOVIE = 'movie';
    const PDF = 'pdf';
    const ZIP = 'zip';
    const RAR = 'rar';
    const OTHER = 'other';

    private $file;
    public static $types;
    private $type = NULL;

    public function __construct($file = NULL)
    {

        if($file !== NULL) {
            $this->file = $file;
        }

        self::$types = [
            self::DIRECTORY,
            self::TXT,
            self::JPG,
            self::JPEG,
            self::PNG,
            self::GIF,
            self::DOC,
            self::PPT,
            self::EXCEL,
            self::MP3,
            self::AUDIO,
            self::MOVIE,
            self::PDF,
            self::ZIP,
            self::RAR,
            self::OTHER
        ];
    }

    public function setFile($file) {

        if(!file_exists($file)) {
            throw new FileNotFoundException($file);
        }

        $this->file = $file;

    }

    public static function getType($file) {


        if(is_dir($file)) {
            return self::DIRECTORY;
        }

        $ext = strtolower(pathinfo($file,PATHINFO_EXTENSION));
        if(in_array($ext, self::$types)) {
            return $ext;
        }

        return self::OTHER;
    }

}