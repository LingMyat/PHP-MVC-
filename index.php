<?php 
require('core/boot.php');
require Router::load("./routes/web.php")
->direct(Request::uri());