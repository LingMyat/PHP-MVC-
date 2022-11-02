<?php

// $router->addRoutesToRouterClass([
//     ""=>"./controllers/HomeController.php",
//     "about"=>"./controllers/AboutController.php",
//     "order"=>"./controllers/OrderController.php",
//     "names"=>"./controllers/addName.php",
// ]);

$router->get("","./controllers/HomeController.php");
$router->get('about','./controllers/AboutController.php');
$router->get('order','./controllers/OrderController.php');
$router->post('names','./controllers/addName.php');
$router->post('postCreate','./controllers/createPost.php');