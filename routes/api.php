<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
/*Route::group(['prefix' => '/api/','middleware' => 'auth:api'], function() {
	Route::get('XmlFiles/download/{token}/{id}', [
			'uses' => 'FileController@download',
			'as' => 'api.download'
		]);
	Route::post('XmlFiles/upload', [
			'uses' => 'FileController@upload',
			'as' => 'api.upload'
		]);
});*/