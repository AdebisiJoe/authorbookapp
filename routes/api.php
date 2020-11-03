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



Route::group(['middleware' => ['throttle:599,1','auth:api'], 'prefix' => ''], function()
{


	Route::get('user', function (Request $request) {
    return $request->user();
});
   

});



Route::group(['middleware' => 'api', 'prefix' => ''], function()
{

	Route::post('/registeruser',[
        'uses'=>'userController@registerUser',
        'as'=>'registeruser'
    ]);

    Route::get('/allusers',[
        'uses'=>'userController@allUsers',
        'as'=>'allusers'
    ]);


    Route::post('/updateuser/{userid}',[
        'uses'=>'userController@updateUser',
        'as'=>'updateuser'
    ]);
    
    

});
