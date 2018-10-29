<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/gago', function () {
    return 'Hello GAGO';
});

Route::resource('eposts', 'PostsController');
Route::resource('eusers', 'UsersController');
//List Students in Json
Route::get('/students', 'StudentController@index');
//List one Student with the ID
Route::get('/student/{id}', 'StudentController@show');
// Create new Student
Route::post('/student', 'StudentController@store'); 
//Update a student
Route::put('/student/{id}', 'StudentController@store');
//Delete a student
Route::delete('/student/{id}', 'StudentController@destroy');

//List Users in Json
Route::get('/users', 'UsersController@index');
//List one User with the ID
Route::get('/user/{id}', 'UsersController@show');
// Create new User
Route::post('/user', 'UsersController@store'); 
//Update a User
Route::put('/user/{id}', 'UsersController@store');
//Delete a User
Route::delete('/user/{id}', 'UsersController@destroy');

//List Posts in Json
Route::get('/posts', 'PostsController@index');
//List one Post with the ID
Route::get('/post/{id}', 'PostsController@show');
// Create new Post
Route::post('/post', 'PostsController@store'); 
//Update a post
Route::put('/post/{id}', 'PostsControllerr@store');
//Delete a post
Route::delete('/post/{id}', 'PostsController@destroy');

//List Comments in Json
Route::get('/comments', 'CommentsController@index');
//List one Comment with the ID
Route::get('/comment/{id}', 'CommentsController@show');
// Create new Comment
Route::post('/comment', 'CommentsController@store'); 
//Update a Comment
Route::put('/comment/{id}', 'CommentsControllerr@store');
//Delete a Comment
Route::delete('/comment/{id}', 'CommentsController@destroy');


