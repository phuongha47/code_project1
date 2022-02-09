<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Users\HomeController;
use App\Http\Controllers\Users\UserPostController;
use App\Http\Controllers\Users\UserCategoryController;

// use App\Http\Controllers\Users\UserPostController as ;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::get('/', 'Users\HomeController@show')->name('home.index');
Route::get('/show/{id}', 'Users\HomeController@show')->name('home.category');
Route::get('/search', 'Users\HomeController@search')->name('home.search');

Route::get('/category/show/{id}', 'Users\UserCategoryController@showSubCategories')->name('userCategory.show');
Route::get('/category/showCategory/{id}', 'Users\UserCategoryController@showCategories')->name('userCategory.showCategory');

Route::get('/show/{id}', 'Users\UserPostController@show')->name('userPost.show');

Route::get('/admin', 'Admin\AdminController@index')->name('admin.index');

Route::get('/admin/post', 'Admin\PostController@index')->name('post.index');
Route::get('admin/create/', 'Admin\PostController@create')->name('post.create');
Route::post('admin/store', 'Admin\PostController@store')->name('post.store');
Route::get('admin/show/{id}', 'Admin\PostController@show')->name('post.show');
Route::get('admin/edit/{post_id}', 'Admin\PostController@edit')->name('post.edit');
Route::put('admin/update/{id}', 'Admin\PostController@update')->name('post.update');
Route::delete('admin/delete/{id}', 'Admin\PostController@destroy')->name('post.destroy');
Route::delete('admin/deleteAll', 'Admin\PostController@deleteAll')->name('post.deleteAll');
Route::get('admin/post/search/', 'Admin\PostController@search')->name('post.search');

Route::get('admin/user', 'Admin\UserController@index')->name('user.index');
Route::get('admin/user/create/', 'Admin\UserController@create')->name('user.create');
Route::post('admin/user/store', 'Admin\UserController@store')->name('user.store');
Route::get('admin/user/show/{id}', 'Admin\UserController@show')->name('user.show');
Route::get('admin/user/edit/{post_id}', 'Admin\UserController@edit')->name('user.edit');
Route::put('admin/user/update/{id}', 'Admin\UserController@update')->name('user.update');
Route::delete('admin/user/delete/{id}', 'Admin\UserController@destroy')->name('user.destroy');
Route::delete('admin/user/deleteAll', 'Admin\UserController@deleteAll')->name('user.deleteAll');
Route::get('admin/user/search/', 'Admin\UserController@search')->name('user.search');

Route::get('admin/category', 'Admin\CategoryController@index')->name('category.index');
Route::get('admin/category/create/', 'Admin\CategoryController@create')->name('category.create');
Route::get('/admin/categorySub', 'Admin\CategoryController@createSubCategory')->name('categorysub.create');
Route::post('admin/category/store', 'Admin\CategoryController@store')->name('category.store');
Route::get('admin/category/show/{id}', 'Admin\CategoryController@show')->name('category.show');
Route::get('admin/category/edit/{post_id}', 'Admin\CategoryController@edit')->name('category.edit');
Route::put('admin/category/update/{id}', 'Admin\CategoryController@update')->name('category.update');
Route::delete('admin/category/delete/{id}', 'Admin\CategoryController@destroy')->name('category.destroy');
Route::delete('admin/category/deleteAll', 'Admin\CategoryController@deleteAll')->name('category.deleteAll');
Route::get('admin/category/search/', 'Admin\CategoryController@search')->name('category.search');

Route::get('lang/{lang}', [
    'as' => 'lang.switch',
    'uses' => 'LanguageController@switchLang'
]);
