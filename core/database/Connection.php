<?php 

class Connection {
    static function make($dbInfo){
        try {
            return new PDO("{$dbInfo['host']};dbname={$dbInfo['dbName']}",$dbInfo['userName'],$dbInfo['password']); 
        } catch (PDOException $err) {
            $err->getMessage();
        }
    }
}