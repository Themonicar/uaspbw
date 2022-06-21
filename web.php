<?php
Route::group(['middleware' => ['auth']], function () {
    //view
    Route::get('/dashboard', 'VideoController@dashboard');
    Route::get('/datavideo', 'VideoController@video');
    Route::get('/video/cari', 'VideoController@video_cari');
    Route::get('/laporananalisa', 'VideoController@laporananalisa');

    //create data video
    Route::get('/video/create/formvideo', 'VideoController@formcreatevideo');
    Route::post('/video/create/data', 'VideoController@createvideo');

    //Update data video
    Route::get('/video/editvideo/{id}', 'VideoController@formupdatevideo');
    Route::put('/video/update/data/{id}', 'VideoController@updatevideo');

    //delete
    Route::get('/video/delete/data/{id}', 'VideoController@deletevideo');

    //logout
    Route::get('/logout', 'AuthController@logout');
});

//login
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/user/ceklogin', 'AuthController@ceklogin');

//sign-up
Route::get('/signup', 'AuthController@signup');
Route::post('/signup/create/user', 'AuthController@createuser');