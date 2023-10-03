<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.layout.subpage');
});

Route::get('about','App\Http\Controllers\ResultController@about')->name('about');

Route::get('case','App\Http\Controllers\ResultController@case')->name('case');

Route::get('client','App\Http\Controllers\ResultController@client')->name('client');

Route::get('information','App\Http\Controllers\ResultController@information')->name('information');

Route::get('service','App\Http\Controllers\ResultController@service')->name('service');

Route::get('contact','App\Http\Controllers\ResultController@contact')->name('contact');


Route::get('admin','App\Http\Controllers\ResultController@admin')->name('admin');


Route::get('index','App\Http\Controllers\ResultController@index')->name('index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'student','as'=>'student.','middleware'=>['auth']],function(){
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'studentIndex'])->name('dashboard');
});

Route::group(['prefix'=>'teacher','as'=>'teacher.','middleware'=>['auth']],function(){
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'teacherIndex'])->name('dashboard');
});

Route::group(['prefix'=>'admin','as'=>'admin.','middleware'=>['auth']],function(){
    Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('dashboard');
});


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/'); // You can redirect the user to any route you prefer after logout.
})->name('logout');


Auth::routes();





Route::get('student/list','App\Http\Controllers\StudentController@index')->name('student.list');
Route::get('student/create','App\Http\Controllers\StudentController@create')->name('student.create');
Route::post('student/store','App\Http\Controllers\StudentController@store')->name('student.store');
Route::get('student/edit/{id}','App\Http\Controllers\StudentController@edit')->name('student.edit');
Route::put('student/update/{id}','App\Http\Controllers\StudentController@update')->name('student.update');
Route::get('student/show/{id}','App\Http\Controllers\StudentController@show')->name('student.show');
Route::get('student/destroy/{id}','App\Http\Controllers\StudentController@destroy')->name('student.destroy');




Route::get('teacher/list','App\Http\Controllers\TeacherController@index')->name('teacher.list');
Route::get('teacher/create','App\Http\Controllers\TeacherController@create')->name('teacher.create');
Route::post('teacher/store','App\Http\Controllers\TeacherController@store')->name('teacher.store');
Route::get('teacher/edit/{id}','App\Http\Controllers\TeacherController@edit')->name('teacher.edit');
Route::put('teacher/update/{id}','App\Http\Controllers\TeacherController@update')->name('teacher.update');
Route::get('teacher/show/{id}','App\Http\Controllers\TeacherController@show')->name('teacher.show');
Route::get('teacher/destroy/{id}','App\Http\Controllers\TeacherController@destroy')->name('teacher.destroy');