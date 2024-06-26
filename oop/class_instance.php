<?php
class MyFileObject{
    private $filename;
    function __construct($fname){
        $this->filename = $fname;
        if(!file_exists($this->filename)){
            die('There is no file '.$this->filename);
        }
    }
    function isFile(){
        return is_file($this->filename);
    }
};
$file = new MyFileObject('data.txt');
// $file->filename = 'data.txt';

var_dump($file->isFile());
// var_dump($file->filename);

/*
MyFileObject : Class
$file, $file2 : Instance
isFile : method, behavior
$this->filename :Instance variable, Instance field, Instance property
    status
*/
?>