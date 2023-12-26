<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', 'IndexController')->name('main.index');
});
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    Route::group(['namespace'=>'Category', 'prefix'=>'categories'], function () {
        Route::get('/', 'IndexController')->name('admin.category');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::get('/edit/{category}', 'EditController')->name('admin.category.edit');
        Route::get('/show/{category}', 'ShowController')->name('admin.category.show');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');        
    });
    Route::group(['namespace'=>'Tag', 'prefix'=>'tags'], function () {
        Route::get('/', 'IndexController')->name('admin.tag');
        Route::post('/', 'StoreController')->name('admin.tag.store');
        Route::get('/create', 'CreateController')->name('admin.tag.create');
        Route::get('/edit/{tag}', 'EditController')->name('admin.tag.edit');
        Route::get('/show/{tag}', 'ShowController')->name('admin.tag.show');
        Route::patch('/{tag}', 'UpdateController')->name('admin.tag.update');
        Route::delete('/{tag}', 'DeleteController')->name('admin.tag.delete');        
    });
    Route::group(['namespace'=>'Group', 'prefix'=>'groups'], function () {
        Route::get('/', 'IndexController')->name('admin.group');
        Route::post('/', 'StoreController')->name('admin.group.store');
        Route::get('/create', 'CreateController')->name('admin.group.create');
        Route::get('/edit/{group}', 'EditController')->name('admin.group.edit');
        Route::get('/show/{group}', 'ShowController')->name('admin.group.show');
        Route::patch('/{group}', 'UpdateController')->name('admin.group.update');
        Route::delete('/{group}', 'DeleteController')->name('admin.group.delete');        
    });
});
