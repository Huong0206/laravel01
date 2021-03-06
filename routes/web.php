<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('foo',function(){
    return 'hello';
});
Route::get('huong',function(){
    $a=1;
    $b=2;
    return "huong:". ($a+$b);
});
Route::get('huong/{id}', function ($id){
    return 'User'.$id;
});
Route::get('posts/{post}/comment{comment}',function($postId, $commentId){
    return "Post: ".$postId."comment: ".$commentId;
});
Route::get('user/name?',function($name= null){
    return $name;
});
Route ::prefix('admin')->group(function(){
    Route::get('user',function(){
        return "Text group";
    });
});
Route::get('huong/{id}', function ($id){
    return 'User'.$id;
})->middleware('checkage');
