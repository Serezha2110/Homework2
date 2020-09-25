<?php
trait GetObject{

    public static function getObject(){
        if (self::$db == null){
            self::$db = new self();
        }
        echo 12333;
        return self::$db;
    }

}