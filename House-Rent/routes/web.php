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
//user part ------------------------------------
Route::get('/','homeController@index');
//upload proparty --------------------------------------------
Route::post('/save-registration','homeController@save_registration');
Route::get('/login','homeController@login');
Route::post('/user-login','homeController@user_login');
Route::get('/registration','homeController@registration');

//upload proparty --------------------------------------------
Route::get('/post-upload','homeController@post_upload');
Route::post('/post-save','homeController@post_save');
Route::get('/available-house','homeController@available_house');
//upload proparty --------------------------------------------


Route::get('/details_post_show/{user_post_id}','homeController@details_post_show');
//user part end -----------------------------------














//admin part ---------------------------------------

Route::get('/admin','adminController@index');
Route::post('/admin-login','adminController@admin_login');
Route::get('/deshbord','adminController@deshbord');
Route::get('/Logout','adminController@Logout');
//post controller -------------------------
Route::get('/add-post','postController@add_post');
Route::post('/save-post','postController@save_post');
Route::get('/all-post','postController@all_post');
Route::get('/edit/{post_id}','postController@edit');
Route::post('/edit-post/{post_id}','postController@edit_post');
Route::get('/delete/{post_id}','postController@delete_post');
//post controller -------------------------
Route::get('/user-post','postController@user_post');
Route::get('/delete-user-post/{user_post_id}','postController@delete_user_post');
//admin part end ----------------------------------------
