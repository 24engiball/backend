<?php
use App\User;
use App\Http\Resources\UserCollection as UserResource;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/get', function () {
    $userss = User::with('find_my_project')->get();
    foreach ($userss as $users)
    {
        foreach ($users->find_my_project as $project)
        {
            return $project->find_project->name;
        }
    }
});
