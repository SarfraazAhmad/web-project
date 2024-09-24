<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post',function(){
    return view('post');
});

// Route::view('/post','post');

Route::get('post/firstPost',function(){
    return view('firstPost');
});

Route::get('/post/{id?}/comment/{comment?}',function(string $id=null,string $comment=null){
    if($id && $comment){
           return "<h1>ID:".$id."</h1>"."<h2>Comment:".$comment."</h2>";
    }else{
           return  "Comment not found";
     }
})->whereNumber('id')->whereAlphaNumeric('comment');
