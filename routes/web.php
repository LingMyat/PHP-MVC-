<?php

// $router->addRoutesToRouterClass([
//     ""=>"./controllers/HomeController.php",
//     "about"=>"./controllers/AboutController.php",
//     "order"=>"./controllers/OrderController.php",
//     "names"=>"./controllers/addName.php",
// ]);

// $router->get("",[PostController::class,'index']);
$router->get("",[PostController::class,'index']);
$router->get('about',[PostController::class,'about']);
$router->get('order',[PostController::class,'order']);
$router->post('postCreate',[PostController::class,'createPost']);