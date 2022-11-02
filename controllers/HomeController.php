<?php 
$posts = App::get('database')->all('posts');
view('index',["posts"=>$posts]);