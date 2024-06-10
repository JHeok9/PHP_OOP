<?php
class MyFileObject{

    function isFile(){
        return is_file('data.txt');
    }

}
$file = new MyFileObject();
var_dump($file->isFile());
?>