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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('courses', function() {
//     // If the Content-Type and Accept headers are set to 'application/json', 
//     // this will return a JSON structure. This will be cleaned up later.
//     return course::all();
// });
 
// Route::get('articles/{id}', function($id) {
//     return Article::find($id);
// });

// Route::post('articles', function(Request $request) {
//     return Article::create($request->all);
// });

// Route::put('articles/{id}', function(Request $request, $id) {
//     $article = Article::findOrFail($id);
//     $article->update($request->all());

//     return $article;
// });

// Route::delete('articles/{id}', function($id) {
//     Article::find($id)->delete();

//     return 204;
// });


Route::get('courses', 'App\Http\Controllers\CourseController@index');
// Route::get('articles/{article}', 'ArticleController@show');
Route::post('course_registration', 'App\Http\Controllers\CourseRegistrationController@store');
// Route::put('articles/{article}', 'ArticleController@update');
// Route::delete('articles/{article}', 'ArticleController@delete');