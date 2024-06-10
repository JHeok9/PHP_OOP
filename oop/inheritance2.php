<?php
$file = new SplFileObject('data.txt');
// var_dump($file->fread($file->getSize()));
// $file->rewind();
// var_dump($file->fread($file->getSize()));

class MyFileObject extends SplFileObject{

    public function getContent(){
        $content = $this->fread($this->getSize());
        $this->rewind();
        return $content;
    }

}

$file = new MyFileObject('data.txt');
var_dump($file->getContent());
var_dump($file->getContent());
?>