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
Route::group([
    "prefix" => "thoughts",
    "middleware" => ["auth:api"],
], function () {
    Route::get("", [Thoughts::class, "index"]);
    Route::post("", [Thoughts::class, "store"]);

    Route::group(["prefix" => "{thought}"], function () {
        // GET single thought /thoughts/{id}: show
        Route::get("", [Thoughts::class, "show"]);

        // PUT update a single thought  /thoughts/{id}: update
        Route::put("", [Thoughts::class, "update"]);

        // DELETE a single thought  /thoughts/{id}: destroy
        Route::delete("", [Thoughts::class, "destroy"]);
    });
});