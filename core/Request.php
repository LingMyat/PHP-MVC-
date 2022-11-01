<?php 
class Request{
    static function uri(){
       return trim($_SERVER['REQUEST_URI'],"/");
    }
}