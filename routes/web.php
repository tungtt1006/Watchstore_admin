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
Auth::routes();

/*
 * ADMIN
 */
Route::group(['as'=>'admin', "prefix"=>"admin","middleware" => "auth"], function() {
   Route::get('/logout', function() {
      Auth::Logout(); 
      return redirect(url('/admin/brand/index')); 
   });

   //Brand - CRUD
   Route::resource('brand', 'BrandController', ['only' => [
    'index', 'create', 'store', 'edit', 'update', 'destroy'
   ]]);
   
   //Watch -CRUD
   Route::resource('watch', 'WatchController', ['only' => [
    'index', 'create', 'store', 'edit', 'update', 'destroy'
   ]]);
});

