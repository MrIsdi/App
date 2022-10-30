<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get("login", [LoginController::class, "login"])
    ->name("login")
    ->middleware("guest");
Route::get("register", [LoginController::class, "register"])
    ->name("register")
    ->middleware("guest");
Route::post("login", [LoginController::class, "autheticate"])
    ->name("loginUser");
Route::post("logout", [LoginController::class, "logout"])
    ->name("logout");
Route::post("register", [LoginController::class, "store"])
    ->name("storeUser");

Route::get("user", [UserController::class, "index"])
    ->name("dashboard-user")
    ->middleware("auth");
Route::get("user/profile", [UserController::class, "profile"])
    ->name("profile-user")
    ->middleware("auth");
Route::get("user/events", [UserController::class, "event"])
    ->name("event-user")
    ->middleware("auth");
Route::get("user/profile/edit", [ProfileController::class, "edit"])
    ->name("edit-profile-user")
    ->middleware("auth");
Route::post("user/profile/edit", [ProfileController::class, "update"])
    ->name("update-profile-user");

Route::get("admin", [AdminController::class, "index"])
    ->name("dashboard-admin")
    ->middleware("auth");
Route::get("admin/user/{admin}", [AdminController::class, "edit"])
    ->name("edit-status-role")
    ->middleware("auth");
Route::post("admin/user/{admin}", [AdminController::class, "update"])
    ->name("update-status-role");
Route::post("admin/{admin}", [AdminController::class, "resetPassword"])
    ->name("reset-password");
Route::get("admin/events", [EventController::class, "index"])
    ->name("event-admin")
    ->middleware("auth");
Route::get("admin/events/create", [EventController::class, "create"])
    ->name("create-event-admin")
    ->middleware("auth");
Route::post("admin/events/create", [EventController::class, "store"])
    ->name("store-event-admin");
Route::get("admin/events/edit/{admin}", [EventController::class, "edit"])
    ->name("edit-event-admin")
    ->middleware("auth");
Route::post("admin/events/edit/{admin}", [EventController::class, "update"])
    ->name("update-event-admin");
Route::post("admin/events/edit/{admin}", [EventController::class, "destroy"])
    ->name("destroy-event-admin");
