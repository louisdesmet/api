<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization, Access-Control-Allow-Origin");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

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

Route::post('/login', 'AuthController@login');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:api']], function () {
    Route::resource('/offices', 'OfficeController');
    Route::resource('/subjects', 'SubjectController');
    Route::resource('/subject-categories', 'SubjectCategoryController');
    Route::resource('/customers', 'CustomerController');
    Route::resource('/contacts', 'ContactController');
    Route::resource('/appointments', 'AppointmentController');
    Route::resource('/outcomes', 'OutcomeController');
});