<?php

use App\Http\Controllers\UserApiController;
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
 *      Pouya Moradi  -> 9811041038
 *      Kimia Hoseyni -> 9811041012
 */
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//show users
Route::get('users', [UserApiController::class, 'index']);

//create user
Route::post('users', [UserApiController::class, 'store']);

//Update user
Route::put('users/{user}', [UserApiController::class, 'update']);

//delete user
Route::delete('users/{user}', [UserApiController::class, 'destroy']);
