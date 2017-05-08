<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Post;


Route::get('/', function () {
    return view('welcome');
});


Route::resource('posts','PostsController');

Route::get('contact','PostsController@contact');


/*
ELOQUENT - ORM
*/

Route::get('/find',function(){
    $posts= Post::orderBy('name','desc')->take(10)->get();
    foreach($posts as $post){
        echo  $post->name.'<br />';

    }

});

Route::get('/basicinsert',function(){
    $post=Post::create(['name'=>'third title',
        'content'=>'3just inserted via Eloquent']);

    $post->save();
});


