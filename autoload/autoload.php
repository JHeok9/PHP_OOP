<?php
spl_autoload_register(function($path){
    $path = str_replace('\\', '/', $path); // macOS에선 디렉토리 패스 \ -> / 바꿔주야함 * 윈도우는 상관없음
    $path = $path.'.php';
    var_dump("path : {$path}");
    require_once $path;
});
?>