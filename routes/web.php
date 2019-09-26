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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'CatController@index');


Route::get('/cats', 'CatController@index');
Route::get('/cat/{id}', 'CatController@show');
Route::get('/cats_left', 'CatController@cats_left');
Route::get('/cats_left/{id}', 'CatController@cats_left');

Route::get('/products', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/product/{id}/to_cart/{qty}', 'ProductController@to_cart');
Route::get('/product/{id}/remote_images', 'ProductController@remote_images');
Route::get('/product/{product}/set_main_image/{img_id}', 'ProductController@set_main_image');
Route::get('/product/{id}/remote_images/{img_id}/remove_image', 'ProductController@remove_image');

// http://localhost:8000/product/1000072/remote_images

// Route::get('/product/{id}/remote_images', 'ProductController@set_main_image');
// $product, $img_url

// 

Route::get('/show_session', 'Controller@show_session');
Route::get('/line_item_remove/{id}', 'LineItemController@remove');
Route::get('/total_cart/{id}', 'CartController@total_cart');
// 

Route::get('/cart/{id}', 'CartController@show');



// Route::get('user/{id}', function ($id) {
//     return 'User '.$id;
// });


// Route::get('/site', function () {
	// $this->data['lang'] = App::getLocale();
	// // $books = DB::table('books')->first();
	
	// $this->data['books'] = \App\Models\Book::all();
 //    // return var_dump($users->toArray()); // <---- or toJson()
	// // return view("site", ["lang"=>$lang], ["books"=>$books]);
	// return view("site", $this->data);
// });

