<?php

use App\Task;
use Illuminate\Http\Request;


Route::get('/home', 'HomeController@index');


Route::get('/product_form', 'ProductController@productForm');
Route::post('/add_product', 'ProductController@addProduct');











Route::get('/', function () {
  return view('welcome');
});

Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');

Route::get('/test', 'TaskController@test');
// Маршруты аутентификации...---------------------------------------------------
Route::auth();
/**
 * Маршруты аутентификации
 */
Route::get('auth/login', 'Auth\LoginController@showLoginForm')->name('auth');
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('auth/logout', 'Auth\LoginController@logout');

/**
 * Маршруты регистрации
 */
Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('auth/register', 'Auth\RegisterController@register');
//------------------------------------------------------------------------------
/**
* Вывести панель с задачами
*/
//Route::get('/', function () {
//    $tasks = Task::orderBy('created_at', 'asc')->get();
//    
//    return view('tasks', [
//        'tasks' => $tasks
//    ]);
//});

/**
* Добавить новую задачу
*/
//Route::post('/task', function (Request $request) {
//  $validator = Validator::make($request->all(), [
//    'name' => 'required|max:255',
//  ]);
//
//  if ($validator->fails()) {
//    return redirect('/')
//      ->withInput()
//      ->withErrors($validator);
//  }
//
//  $task = new Task;
//  $task->name = $request->name;
//  $task->save();
//
//  return redirect('/');
//});

/**
* Удалить задачу
*/
//Route::delete('/task/{task}', function (Task $task) {
//  $task->delete();
//
//  return redirect('/');
//});


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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
