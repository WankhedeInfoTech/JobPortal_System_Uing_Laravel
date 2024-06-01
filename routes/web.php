<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeConrtoller; 
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});
Route::get('/AboutUs', function () {
    return view('AboutUs');
});
Route::get('/RegisterEmployer', function () {
    return view('RegisterEmployer');
});
Route::get('/RegisterJobSeeker', function () {
    return view('RegisterJobSeeker');
});
Route::get('/ContactUs', function () {
    return view('ContactUs');
});
Route::get('/EmployerLogin', function () {
    return view('EmployerLogin');
});
Route::get('/JobSeekerLogin', function () {
    return view('JobSeekerLogin');
});
Route::get('/AdminLogin', function () {
    return view('adminLogin');
});


// Employer Panel Controllers

Route::get('/Employer',[HomeConrtoller::class,'Employer']);
Route::get('/JobSeeker',[HomeConrtoller::class,'JobSeeker']);
Route::Post('/RegisterEmployer',[HomeConrtoller::class,'RegisterEmployer']);
Route::Post('/RegisterJobSeeker',[HomeConrtoller::class,'RegisterJobSeeker']);
Route::get('/LatestNews',[HomeConrtoller::class,'LatestNews']);
Route::Post('/EmployerLogin',[HomeConrtoller::class,'EmployerLogin']);
Route::Post('/JobSeekerLogin',[HomeConrtoller::class,'JobSeekerLogin']);
Route::get('/Profile/{id}',[HomeConrtoller::class,'Profile']);
Route::get('/EditProfile/{id}',[HomeConrtoller::class,'EditProfile']);
Route::Post('/EditProfile1',[HomeConrtoller::class,'UpdateProfile']);
Route::get('/Managejob/{CompanyName}',[HomeConrtoller::class,'Managejob']);
Route::get('/DeleteJob/{id}',[HomeConrtoller::class,'DeleteJob']);
Route::Post('/InsertJob/{CompanyName}',[HomeConrtoller::class,'InsertJob']);
Route::get('/ManageWalkin/{CompanyName}',[HomeConrtoller::class,'ManageWalkin']);
Route::get('/DeleteWalkin/{id}',[HomeConrtoller::class,'DeleteWalkin']);
Route::Post('/InsertWalkin/{CompanyName}',[HomeConrtoller::class,'InsertWalkin']);
Route::Get('/Application/{id}/{CompanyName}',[HomeConrtoller::class,'Application']);
Route::Post('/Application2',[HomeConrtoller::class,'Application2']);
Route::Get('/ViewBiodata/{JobSeekId}/{ApplicationId}/{JobId}/{Status}',[HomeConrtoller::class,'ViewBiodata']);
Route::Post('/CallLatter/{JobId}/{JobSeekId}/{ApplicationId}',[HomeConrtoller::class,'CallLatter']);
Route::Get('/logout',[HomeConrtoller::class,'Logout']);


Route::get('/EnterEmployer',function(){
        return view('Employer/index');
});

Route::get('/Profile',[HomeConrtoller::class,'Profile']);

// JobSeeker Panel Controller Routes

Route::get('/EnterJobSeeker',function(){
    return view('JobSeeker/index');
});

Route::Post('/JobSeekerLogin',[UserController::class,'JobSeekerLogin']);
Route::Get('/Profile1/{id}',[UserController::class,'Profile']);
Route::Get('/EditProfile1/{id}',[UserController::class,'EditProfile']);
Route::Post('/EditProfile11',[UserController::class,'UpdateProfile']);
Route::Get('/Education/{id}',[UserController::class,'Education']);
Route::Post('/Education/{id}',[UserController::class,'InsertEducation']);
Route::Get('/SearchJob/{id}',[UserController::class,'SearchJob']);
Route::Post('/SearchJob/{id}',[UserController::class,'FindJob']);
Route::Post('/Apply/{JobId}/{id}',[UserController::class,'ApplyJob']);
Route::Get('/Walkin/{id}',[UserController::class,'WalkinJob']);
Route::Get('/FeedBack',[UserController::class,'FeedBack']);
Route::Post('/InsertFeedback/{id}',[UserController::class,'InsertFeedback']);
Route::Get('/Session_destroy',[HomeConrtoller::class,'Logout']);
// Admin Panel Controller Routes

Route::get('/EnterAdmin',function(){
    return view('Admin/index');
});

Route::Post('/AdminLogin',[AdminController::class,'AdminLogin']);
Route::Get('/User',[AdminController::class,'User']);
Route::Get('/EditUse/{Id}',[AdminController::class,'EditUse']);
Route::Post('/InsertUser',[AdminController::class,'InsertUser']);
Route::Get('/DeleteUser/{Id}',[AdminController::class,'DeleteUser']);
Route::Get('/Managejob',[AdminController::class,'ManageJob']);
Route::Get('/DetailJob/{JobId}',[AdminController::class,'DetailJob']);
Route::Get('/ApprovJob/{JobId}',[AdminController::class,'ApprovJob']);
Route::Get('/ManageEmployer',[AdminController::class,'ManageEmployer']);
Route::Get('/DetailEmp/{EmpId}',[AdminController::class,'DetailEmp']);
Route::Get('/ApprovEmp/{EmpId}',[AdminController::class,'ApprovEmp']);
Route::Get('/News',[AdminController::class,'News']);
Route::Get('/DeleteNews/{NewsId}',[AdminController::class,'DeleteNews']);

Route::Post('/UploadNews',[AdminController::class,'UploadNews']);

Route::Get('/Feedback',[AdminController::class,'Feedback']);

Route::Get('/logout',[HomeConrtoller::class,'logout']);