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
    return view('home');
});


Route::resource('posts','PostsController');

Route::get('contact','PostsController@contact');

Route::resource('admin/users','AdminUsersController');
Route::resource('admin/girls','AdminGirlsController');
Route::get('admin/girls/deleteimage/{id}','AdminGirlsController@deleteimage');


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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/girl/{url}', 'HomeController@girl')->name('home');
