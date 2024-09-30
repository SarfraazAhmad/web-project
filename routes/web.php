<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');                        //Named Route

Route::get('/post',function(){
    return view('posts/post');
})->name('post');

// Route::view('/post','post');
                                           //Group Routes
Route::prefix('/post')->group(function(){ 
    Route::get('/firstPost',function(){
        return view('posts/firstPost');
    })->name('firstPost');
    
    Route::get('/secondPost',function(){
        return view('posts/secondPost');
    })->name('2ndPost');
    
    Route::get('/thirdPost',function(){
        return view('posts/thirdPost');
    })->name('3rdPost');
});

Route::get('/post/{id?}/comment/{comment?}',function(string $id=null,string $comment=null){ //Route with Parms
    if($id && $comment){
           return "<h1>ID:".$id."</h1>"."<h2>Comment:".$comment."</h2>";
    }else{
           return  "Comment not found";
     }
})->whereNumber('id')->whereAlphaNumeric('comment');

Route::get('/test',function(){
    return view('pages/about');
})->name('about');

Route::redirect('/about','/test'); //Route Redirection

Route::fallback(function(){
    return "<h1>View not Found</h1>";
});


// Blade Template Directives
//@include
Route::get('/', function () {
    return view('pages/home');
})->name('home'); 

//@extend

Route::get('/masterlayout',function(){
    return view('layouts.masterlayout');
})->name('masterlayout');