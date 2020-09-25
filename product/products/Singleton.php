<?php

class Singleton
{

    static $db; //object of class
    static $connect;

    private function __construct(){
//      connect to DB
//        self::$connect = ...
    }

    use GetObject;

    public function update(){}
    public function delete(){}
    public function select(){}
}
