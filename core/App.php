<?php 
class App{
    protected static $datas = [];
    static function bind($key,$value){
        static::$datas[$key]=$value;
    }
    static function get($key){
        return static::$datas[$key];
    }

}