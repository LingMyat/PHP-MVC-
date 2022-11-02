<?php 
require "vendor/autoload.php";
require('core/boot.php');
Router::load("./routes/web.php")
->direct(Request::uri(),$_SERVER["REQUEST_METHOD"]);