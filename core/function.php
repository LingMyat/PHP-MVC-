<?php

function dd($data){
    echo"<pre>";
    die(var_dump($data));
}
function view($name,$data=[]){
    extract($data);
    return require("views/$name.view.php");
}// [] is for default value ; 
function redirect($uri){
    header("location:$uri");
}