<?php

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


Route::get('/about', function () {
    return view('about');
});


// Route::get('/practice', function () {
//     return view('practice', [
//         'name' => 'world'
//     ]);
// });


// Route::get('/practice', function () {
//     return view('practice')->with('name', 'world');
// });


// Route::get('/practice', function () {
//     $name = 'dusty';
//     $age = '38';
//     return view('practice', compact('name', 'age'));
// });


Route::get('/tasks', function () {

    $tasks = DB::table('tasks')->latest()->get();
    
    return view('tasks.index', compact('tasks'));
});


Route::get('/tasks/{task}', function ($id) {

    $task = DB::table('tasks')->find($id);
    
    return view('tasks.show', compact('task'));
});
