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
use App\Food;

Route::get('/', function () {
    return view('welcome');
});

//header route
Route::get('about','AboutController@index');
Route::get('contact','contactController@index');
Route::get('home','HomeController@index');
Route::get('danh-sach-thuc-don','MenuController@index')->name("thucdon");
Route::get('check-out','BillDetailController@index')->name('checkout');
Route::post('check-out','BillDetailController@UploadBill')->name('postCart');
Route::get('login','UserController@getLogin')->name('getLogin');
Route::post('login','UserController@postLogin')->name('postLogin');
Route::get('register','UserController@getRegister')->name('getRegister');
Route::post('register','UserController@postRegister')->name('postRegister');
Route::get('logout','UserController@logout')->name('logout');

//ajax
Route::post('ajax/checkout','MenuController@addCart')->name('cart');

Route::get('ajax/products',function(){
    $food = Food::paginate(6);
    return view('thucdon.pagination', compact('food'))->render();
});

// Route::get('ajax/search',function(Request $request){
//     $key  = $request->key;
//     $search_food = Food::where('name','like',"%$key%")->orWhere('detail','like',"%$key%")->orWhere('price','like',"%$key%")->paginate(6);
//     return view('search.pagination', compact('search_food'))->render();

// });



//search

Route::post('search' , 'SearchController@postSearch');




Route::get('delete',function(){
    Cart::destroy();
});









Route::post('ajax/changeQty','BillController@changeQty');
Route::post('ajax/Delete','BillController@Delete');
Route::post('ajax/changePrice','BillController@changePrice');






