<?php

use Illuminate\Http\Request;
use App\Http\Resources\Hello as HelloResource;
use App\Hello;
use App\ProjectMember;
use App\Project;


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

Route::get('/hello', function () {
    $project_id = Project::all()->random();
    return ProjectMember::all()->where('project_id','=',$project_id->id)->pluck('user_id')->random();
});
