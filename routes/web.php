<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\TheLoai;
use Illuminate\Http\Request;

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

Route::get('master', function(){
    return view('layouts.master');
});

/**
 * Restful category
 */

 //Index page
Route::get('/category', function(){
    $catList = Category::all();
    return view('category.index', ['catList' => $catList]);
})->name('category.index');

 //Page create
 Route::get('/category/create', function(){
    return view('category.create');
})->name('category.create');

 //Action store
 Route::post('/category/store', function(Request $request){
    Category::create($request->all());
    return redirect()->route('category.index');
})->name('category.store');

 //Page show
 Route::get('/category/{id}', function($id){
    $cat = Category::find($id);
    return view('category.show', ['cat' => $cat]);
})->name('category.show');

 //Page edit
 Route::get('/category/{id}/edit', function($id){
    $cat = Category::find($id);
    return view('category.edit', ['cat' => $cat]);
})->name('category.edit');

 //Action update
 Route::put('/category/{id}', function(Request $request, $id){
    $cat = Category::find($id);
    $cat->update($request->all());
    return redirect()->route('category.index');
})->name('category.update');


 //Action delete
 Route::delete('/category/{id}', function($id){
    Category::destroy($id);
    return redirect()->route('category.index');
})->name('category.destroy');

 //The Loai
 //Index page
Route::get('/theloai', function(){
    $catList = TheLoai::all();
    return view('theloai.index', ['catList' => $catList]);
})->name('theloai.index');

 //Page create
 Route::get('/theloai/create', function(){
    return view('theloai.create');
})->name('theloai.create');

 //Action store
 Route::post('/theloai/store', function(Request $request){
    Category::create($request->all());
    return redirect()->route('theloai.index');
})->name('theloai.store');

 //Page show
 Route::get('/theloai/{id}', function($id){
    $cat = Category::find($id);
    return view('theloai.show', ['cat' => $cat]);
})->name('theloai.show');

 //Page edit
 Route::get('/theloai/{id}/edit', function($id){
    $cat = Category::find($id);
    return view('theloai.edit', ['cat' => $cat]);
})->name('theloai.edit');

 //Action update
 Route::put('/theloai/{id}', function(Request $request, $id){
    $cat = Category::find($id);
    $cat->update($request->all());
    return redirect()->route('theloai.index');
})->name('theloai.update');


 //Action delete
 Route::delete('/theloai/{id}', function($id){
    Category::destroy($id);
    return redirect()->route('theloai.index');
})->name('theloai.destroy');

