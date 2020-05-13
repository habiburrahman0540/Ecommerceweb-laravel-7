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



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout', 'HomeController@Logout')->name('logout');
Route::get('/user/Change/Password','HomeController@ChangePassword')->name('user.password.change');
Route::post('/user/password/update','HomeController@Update_pass')->name('user.password.update'); 

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

// Coupon Discount
Route::get('/admin/coupons','Admin\Category\CouponController@coupons')->name('admin.coupons');
Route::post('/admin/store/coupon','Admin\Category\CouponController@Storecoupon')->name('store.coupon');
Route::get('/coupon/delete/{id}','Admin\Category\CouponController@Deletecoupon');
Route::get('/edit/coupon/{id}','Admin\Category\CouponController@Editcoupon');
Route::post('/update/coupon/{id}','Admin\Category\CouponController@updatecoupon');
// Subscriber or newsletter list
Route::get('/admin/newsletters','Admin\Category\CouponController@newsletters')->name('admin.newsletters');
Route::get('/newsletters/delete/{id}','Admin\Category\CouponController@Deletenewsletters');
//Product route
Route::get('admin/product/all','Admin\ProductController@index')->name('all.product');
Route::get('admin/product/settings','Admin\ProductController@ProductSettings')->name('product.setting');
Route::get('admin/product/add','Admin\ProductController@create')->name('add.product');
Route::get('get/subcategory/{category_id}','Admin\ProductController@subcategory');
Route::post('/admin/product/store','Admin\ProductController@store')->name('store.product');
Route::get('inactive/product/{id}','Admin\ProductController@inactive');
Route::get('active/product/{id}','Admin\ProductController@active');
Route::get('inactive/product/hotdeal/{id}','Admin\ProductController@inactivehotdeal');
Route::get('active/product/hotdeal/{id}','Admin\ProductController@activehotdeal');
Route::get('inactive/product/trend/{id}','Admin\ProductController@inactivetrend');
Route::get('active/product/trend/{id}','Admin\ProductController@activetrend');
Route::get('inactive/product/bestrated/{id}','Admin\ProductController@inactivebestrated');
Route::get('active/product/bestrated/{id}','Admin\ProductController@activebestrated');

Route::get('product/delete/{id}','Admin\ProductController@DeleteProduct');
Route::get('product/view/{id}','Admin\ProductController@ViewProduct');
Route::get('edit/product/{id}','Admin\ProductController@EditProduct');
Route::post('update/product/{id}','Admin\ProductController@UpdateProduct');

//Blog route
Route::get('admin/blog/cat/list','Admin\PostController@Blogcatlist')->name('blog.category.list');
Route::post('admin/store/blog','Admin\PostController@Blogcatstore')->name('store.blog.category');
Route::get('blog/cat/delete/{id}','Admin\PostController@Blogcatdelete');
Route::get('admin/blog/cat/edit/{id}','Admin\PostController@BlogcatEdit');
Route::post('admin/blog/cat/update/{id}','Admin\PostController@BlogcatUpdate');
Route::get('admin/add/blog/post','Admin\PostController@Create')->name('add.blogpost');
Route::post('admin/store/post','Admin\PostController@StoreBlogpost')->name('store.blogpost');
Route::get('admin/blog/post','Admin\PostController@index')->name('all.blog.post');
Route::get('post/delete/{id}','Admin\PostController@DeletePost');
Route::get('post/edit/{id}','Admin\PostController@EditPost');
Route::post('post/update/{id}','Admin\PostController@UpdatePost');
Route::get('post/view/{id}','Admin\PostController@ViewPost');



// All route for Frontend 
Route::post('store/newsletter','FrontController@StoreNewsletter')->name('store.newsletter');
Route::get('/','Frontend\HomeContentController@HomeContent');


Route::get('add/wishlist/{id}','WishlistController@addwishlist');
Route::get('add/to/card/{id}','CardController@addCard');
Route::get('checkcart','CardController@checkcart');
// product route for Frontend 
Route::get('product/details/{id}/{product_name}','ProductController@ProductView');