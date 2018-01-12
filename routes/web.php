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

Route::get('about','AboutController@index');
Route::get('contact','contactController@index');
Route::get('home','HomeController@index');
Route::get('danh-sach-thuc-don','MenuController@index')->name("thucdon");

Route::get('check-out','BillDetailController@index')->name('checkout');

Route::post('ajax/checkout','MenuController@addCart')->name('cart');

Route::get('delete',function(){
    Cart::destroy();
});

Route::get('ajax/products',function(){
    $food = Food::paginate(6);
    return view('thucdon.pagination', compact('food'))->render();
});

Route::post('ajax/changeQty','BillController@changeQty');
Route::post('ajax/Delete','BillController@Delete');

Route::post('ajax/changePrice','BillController@changePrice');



