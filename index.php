<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/6/29 0029
 * Time: 14:48
 */

if($_SERVER['HTTPS'] && $_SERVER['HTTPS'] !== 'off'){
    $protocol = 'https://';
}else {
    $protocol = 'http://';
}
$host = $_SERVER['HTTP_HOST'];
$request_uri = $_SERVER['SCRIPT_NAME'];

define('ENTRANCE_URL', $protocol . $host . $request_uri);

require 'autoload.php';

use base\Directory;

$directory = new Directory(getcwd());

$path = $directory->getRoot() . (isset($_GET['p']) ? $_GET['p'] : Directory::DS . '.');

$directory->setDir($path);

$files = $directory->listDir();

include 'views/index.php';