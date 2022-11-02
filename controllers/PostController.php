<?php
class PostController{
    public function index(){
        $posts = App::get('database')->all('posts');
        view('index',["posts"=>$posts]);
    }
    public function about(){
        view('about');
    }
    public function order(){
        view('order');
    }
    public function createPost(){
        App::get('database')->create($_POST,'posts');
        redirect('/');
    }
}