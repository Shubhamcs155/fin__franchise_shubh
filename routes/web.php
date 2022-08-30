<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\FranchiseController;
use App\Http\Controllers\AnnouncementController;



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
Route::group(['middleware' => 'prevent-back-history'],function(){


/* ------------------- Admin Route Start-----------------*/

Route::prefix('admin')->name('admin.')->group(function (){
    Route::middleware(['guest:admin'])->group(function (){
        Route::get('/login',[AdminController::class,'index'])->name('login_form');
        Route::post('/login',[AdminController::class,'login'])->name('login');
    });
    Route::middleware(['auth:admin'])->group(function (){
        Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
        Route::get('/logout',[AdminController::class,'logout'])->name('logout');
        Route::get('/studentlist',[AdminController::class,'studentlist'])->name('studentlist');
        Route::get('/addstudent',[AdminController::class,'addstudent'])->name('addstudent');
        Route::get('/profile',[AdminController::class,'profile'])->name('profile');
        Route::get('/student-profile/{id}',[AdminController::class,'studentProfile'])->name('studentProfile');
        Route::get('/announcement',[AdminController::class,'announcement'])->name('announcement');
        Route::post('/announcement',[AnnouncementController::class,'store'])->name('announcement');
        Route::patch('/update',[AdminController::class,'profileUpdate'])->name('profileUpdate');
        Route::post('/changePassword',[AdminController::class,'changePassword'])->name('changePassword');

    });
    


});

/* ------------------- Admin Route End -----------------*/



/* ------------------- Instructor Route Start -----------------*/

Route::prefix('instructor')->name('instructor.')->group(function (){
    Route::middleware(['guest:instructor'])->group(function (){
        Route::get('/login',[InstructorController::class,'index'])->name('login_form');
        Route::post('/login',[InstructorController::class,'login'])->name('login');
    });
    Route::middleware(['auth:instructor'])->group(function (){
        Route::get('/logout',[InstructorController::class,'logout'])->name('logout');
        Route::get('/',[InstructorController::class,'profile'])->name('profile');
        Route::get('/profile',[InstructorController::class,'profile'])->name('profile');
        Route::get('/courses-list',[InstructorController::class,'courses_list'])->name('courses_list');
        Route::get('/uploadmarks',[InstructorController::class,'uploadmarks'])->name('uploadmarks');
        Route::get('/schedule',[InstructorController::class,'schedule'])->name('schedule');
        Route::get('/inspayments',[InstructorController::class,'inspayments'])->name('inspayments');
    });


});

/* ------------------- Instructor Route End -----------------*/


/* ------------------- Student Route Start -----------------*/

Route::prefix('student')->name('student.')->group(function (){
    Route::middleware(['guest:student'])->group(function (){
        Route::get('/login',[StudentController::class,'index'])->name('login_form');
        Route::post('/login',[StudentController::class,'login'])->name('login');
    });
    Route::middleware(['auth:student'])->group(function (){
        Route::get('/dashboard',[StudentController::class,'dashboard'])->name('dashboard');
        Route::get('/logout',[StudentController::class,'logout'])->name('logout');
           Route::get('/profile',[InstructorController::class,'profile'])->name('profile');
        Route::get('/announcement/{id}',[StudentController::class,'announcement'])->name('announcement');
    });
});

/* ------------------- Student Route End-----------------*/



/* ------------------- Franchise Route Start -----------------*/


Route::prefix('franchise')->name('franchise.')->group(function (){
    Route::middleware(['guest:franchise'])->group(function (){
        Route::get('/login',[FranchiseController::class,'index'])->name('login_form');
        Route::post('/login',[FranchiseController::class,'login'])->name('login');
    });
    Route::middleware(['auth:franchise'])->group(function (){
        Route::get('/',[FranchiseController::class,'dashboard'])->name('dashboard');
        Route::get('/profile',[FranchiseController::class,'profile'])->name('profile');
        Route::get('/dashboard',[FranchiseController::class,'dashboard'])->name('dashboard');
        Route::get('/logout',[FranchiseController::class,'logout'])->name('logout');
        Route::get('/addstudent',[FranchiseController::class,'allstudents'])->name('allstudents');
        Route::get('/allstudents',[FranchiseController::class,'addstudent'])->name('addstudent');
        Route::get('/allinstructors',[FranchiseController::class,'allinstructors'])->name('allinstructors');
        Route::get('/addinstructor',[FranchiseController::class,'addinstructor'])->name('addinstructor');        
        Route::get('/allbatches',[FranchiseController::class,'allbatches'])->name('allbatches');
        Route::get('/addbatch',[FranchiseController::class,'addbatch'])->name('addbatch');
        Route::get('/uploadedmarks',[FranchiseController::class,'uploadedmarks'])->name('uploadedmarks');
        Route::get('/markasdone',[FranchiseController::class,'markasdone'])->name('markasdone');
        
        Route::get('/changemarks',[FranchiseController::class,'changemarks'])->name('changemarks');
        Route::get('/addmarks',[FranchiseController::class,'addmarks'])->name('addmarks');
        Route::get('/changebatch',[FranchiseController::class,'changebatch'])->name('changebatch');
        Route::get('/fcalendar',[FranchiseController::class,'fcalendar'])->name('fcalendar');
        Route::get('/addclass',[FranchiseController::class,'addclass'])->name('addclass');
        Route::get('/allpayments',[FranchiseController::class,'allpayments'])->name('allpayments');
        Route::get('/addpayment',[FranchiseController::class,'addpayment'])->name('addpayment');
    });


});



/* ------------------- Franchise Route End -----------------*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';





});
