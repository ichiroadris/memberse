<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PostController;
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
    Route::get('/admin/members', [MemberController::class, 'index'])->name('members');
    Route::get('/admin/events', [EventController::class, 'index'])->name('events');
    Route::get('/admin/event/show/{id}', [EventController::class, 'show'])->name('event');
    Route::post('/admin/create/event', [EventController::class, 'create'])->name('create.event');
    Route::get('/admin/posts', [PostController::class, 'index'])->name('posts');
    Route::get('/admin/membership', [PostController::class, 'index'])->name('membership');

});

Route::get('/events', [EventController::class, 'publicIndex']);
Route::get('/event/{id}', [EventController::class, 'publicShow']);


Route::group(['middleware' => ['role:member']], function () {
    Route::get('/member', function () {
        return view('welcome');
    })->name('member');
});
