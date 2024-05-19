<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ModuleContoller;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ProfileController;
use App\Models\Filiere;
use App\Models\Module;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;




Route::get('/login', [AuthController ::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController ::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {

    Route::get('/prof/dashboard', function () {
        return view('prof.dashboard');
    })->name('prof.dashboard');

    Route::get('/coord/dashboard', function () {
        return view('dashboard');
    })->name('coord.dashboard');

    Route::get('/chef_dept/dashboard', function () {
        $majors = Filiere::all();
        return view('chef_dept.dashboard',['majors'=>$majors]);
    })->name('chef_dept.dashboard');

    Route::get('/student/dashboard', function () {
        return view('student.dashboard');
    })->name('student.dashboard');
    Route::get('/Filiers/{id}', [ModuleController::class, 'show'])->name('major.show');
    Route::get('/classes/{id}/modules', [ModuleController::class, 'showModules'])->name('classes.modules');


});