<?php

use Illuminate\Support\Facades\Auth;
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
    return view('pages.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login')->name('admin.login.submit');
Route::get('admin/logout', 'Admin\LoginController@logout')->name('admin.logout');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update'); 
// Category Route
Route::get('/admin/categories','Admin\Category\CategoryController@category')->name('admin.categories');
Route::post('/admin/store/category','Admin\Category\CategoryController@storecategory')->name('store.category');
Route::get('/category/delete/{id}','Admin\Category\CategoryController@Deletecategory');
Route::get('/edit/category/{id}','Admin\Category\CategoryController@Editcategory');
Route::post('/update/category/{id}','Admin\Category\CategoryController@Updatecategory');
//Brand Route
Route::get('/admin/brands','Admin\Category\BrandController@brand')->name('admin.brands');
Route::post('/admin/store/brand','Admin\Category\BrandController@storebrand')->name('store.brand');
Route::get('/brand/delete/{id}','Admin\Category\BrandController@Deletebrand');
Route::get('/edit/brand/{id}','Admin\Category\BrandController@Editbrand');
Route::post('/update/brand/{id}','Admin\Category\BrandController@Updatebrand');

//Subcategory Route
Route::get('/admin/subcategory','Admin\Category\SubcategoryController@subcategory')->name('admin.subcategory');
Route::post('/admin/store/subcategory','Admin\Category\SubcategoryController@Storesubcategory')->name('store.subcategory');
Route::get('/subcategory/delete/{id}','Admin\Category\SubcategoryController@Deletebrand');
Route::get('/edit/subcategory/{id}','Admin\Category\SubcategoryController@Editsubcategory');
Route::post('/update/subcategory/{id}','Admin\Category\SubcategoryController@updatesubcategory');