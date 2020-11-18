<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return view('welcome');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return Inertia\Inertia::render('Dashboard');
// })->name('dashboard');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/admin', function () {
        return redirect('dashboard');
    });

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('/admin/members', [MemberController::class, 'index']);
});

Route::group(['middleware' => ['role:member']], function () {
    Route::get('/member', function () {
        return view('welcome');
    })->name('member');
});
