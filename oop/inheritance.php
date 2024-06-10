<?php
class Animal{
    public function run(){
        print('running...<br>');
    }

    public function breathe(){
        print('breathing...<br>');
    }
}

class Human extends Animal{
    public function think(){
        print('thinking...<br>');
    }

    public function talk(){
        print('talking...<br>');
    }
}

$human = new Human();
$human->run();
$human->think();
$human->talk();

?>