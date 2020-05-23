<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*admin route*/

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin'], function(){

Route::get('dashboard','DashboardController@index')->name('dashboard');
Route::resource('type','TypeController');
Route::resource('subtype','SubTypeController');
Route::resource('student','StudentController');
Route::resource('parent','ParentController');
Route::resource('teacher','TeacherController');
Route::resource('staff','StaffController');
Route::resource('class','ClassController');
Route::resource('classroutine','ClassRoutineController');
Route::resource('exam','ExamController');
Route::resource('examschedule','StExamScheduleController');
Route::resource('subject','SubjectController');
Route::resource('expense','ExpenseController');
Route::resource('hostel','HostelController');
Route::resource('transport','TransportController');
Route::resource('message','MessageController');
Route::resource('notice','NoticeController');
Route::resource('attendance','AttendanceController');
});

/*author route*/

Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'author'], function(){

Route::get('dashboard','DashboardController@index')->name('dashboard');

});

/*teacher route*/

Route::group(['as'=>'teacher.','prefix'=>'teacher','namespace'=>'teacher'], function(){

Route::get('dashboard','DashboardController@index')->name('dashboard');

});

/*student route*/

Route::group(['as'=>'student.','prefix'=>'student','namespace'=>'student'], function(){

Route::get('dashboard','DashboardController@index')->name('dashboard');

});


/*parent route*/

Route::group(['as'=>'parent.','prefix'=>'parent','namespace'=>'parent'], function(){

Route::get('dashboard','DashboardController@index')->name('dashboard');

});


/*staff route*/

Route::group(['as'=>'staff.','prefix'=>'staff','namespace'=>'staff'], function(){

Route::get('dashboard','DashboardController@index')->name('dashboard');

});