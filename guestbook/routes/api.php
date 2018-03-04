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

/*
Routing for API
    GET: api/signatures this endpoint is responsible for fetching all signatures.
    GET: api/signature/:id this endpoint is responsible for fetching a single signature by its ID.
    POST: api/signatures this is the endpoint we will be hitting to save a new signature.
    PUT: api/:id/report this endpoint is the one we will use to report a signature.

*/
Route::resource('signatures', 'Api\SignatureController')
    ->only(['index', 'store', 'show']);
Route::put('signatures/{signature}/report', 'Api\ReportSignature@update');
