<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudenController;

Route::controller(StudenController::class)->group(function(){


    

Route::get('/', 'showStudents')->name('home'); 

Route::get('/student/{id}', 'singlestudent')->name('view.student'); 


Route::post('/add', 'addStudent')->name('addStudent'); 

Route::post('/update/{id}', 'updateStudent')->name('update.student'); 
Route::get('/updatepage/{id}', 'updatePage')->name('update.page'); 


Route::get('/delete/{id}', 'deleteStudent')->name('delete.student'); 

});
Route::view('newstudent', '/addstudent');
