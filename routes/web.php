<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('homepage');

Route::get('/category/{slug}', 'CategoryController@getCategoryPosts')->name('category');
Route::get('/post/{slug}', 'PostController@displayPost')->name('post.display');
Route::get('/get-past-questions', 'QuestionController@showPage')->name('question.show');
Route::get('/gpa-calculator', 'QuestionController@showGpaPage')->name('question.showGpaPage');

Route::get('/pagenotfound', 'ErrorController@notfound')->name('notfound');

Route::prefix('backend')->group(function() {
    Route::resource('/', 'AdminController')->middleware('auth');
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('admin.logout');
    Route::resource('/categories', 'CategoryController')->middleware('auth');
    Route::resource('/posts', 'PostController')->middleware('auth');
    Route::get('/allPosts', 'PostController@displayAllPosts')->name('posts.allposts')->middleware('auth');
    Route::get('/profile', 'AdminController@showProfile')->name('admin.showProfile')->middleware('auth');
    Route::get('/profile/{email}/edit', 'AdminController@showProfileEdit')->name('admin.showProfileEdit')->middleware('auth');
    Route::patch('/profile/{email}', 'AdminController@updateProfile')->name('admin.updateProfile')->middleware('auth');
    Route::get('/passwordPage', 'AdminController@passwordPage')->name('admin.passwordPage')->middleware('auth');
    Route::post('/passwordPage', 'AdminController@changePassword')->name('admin.changePassword')->middleware('auth');
    Route::resource('/sliders', 'SliderController')->middleware('auth');
});

