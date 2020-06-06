<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
# use the appropriate controller
use App\Http\Controllers\API\Thoughts;

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

# use array syntax to point to controller
# tidier and harder to make typos
Route::get("/thoughts", [Thoughts::class, "index"]);
