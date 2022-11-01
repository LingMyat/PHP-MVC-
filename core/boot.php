<?php
$config = require("./config.php");
require('core/function.php');
require("core/database/Connection.php");
require("core/database/QueryBuilder.php");
require("core/Router.php");
require("core/Request.php");


$pdo = Connection::make($config['database']);
$query = new QueryBuilder($pdo);