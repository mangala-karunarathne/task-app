<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//$data=Tasks::all();

Route::get('/tasks', function(){
$data = App\Models\Task::all();
return view('tasks')->with('tasks',$data);
});
 
// Directly call the view
Route::get('/about', function(){
    return view('aboutus');
});

// Directly call the view
Route::get('/contact', function(){
    return view('contactus');
});

Route::get('/login', function(){
    echo " MK Builders ";
});
    
Route::get('/about-us','App\Http\Controllers\PageController@index_aboutus');
// same rout output using controller instead of use routes directly 


Route::get('/contact-us','App\Http\Controllers\PageController@index_contactus');
// same rout output using controller instead of use routes directly 

Route::post('/savetask', 'App\Http\Controllers\TaskController@store');

Route::get('/markascompleted/{id}','App\Http\Controllers\TaskController@UpdateTaskAsCompleted');

Route::get('/markasnotcompleted/{id}','App\Http\Controllers\TaskController@UpdateTaskAsNotCompleted');

Route::get('/deletetask/{id}','App\Http\Controllers\TaskController@DeleteTask');

Route::get('/updatetask/{id}','App\Http\Controllers\TaskController@UpdateTaskView');

Route::post('/tasks','App\Http\Controllers\TaskController@UpdateTask');
