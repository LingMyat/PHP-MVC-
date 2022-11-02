<?php 
class Request{
    static function uri(){
       return parse_url(trim($_SERVER['REQUEST_URI'],"/"),PHP_URL_PATH);
    }
}