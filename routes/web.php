<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\LeadController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\DashboardController;

use Latfur\Event\Http\Controllers\EventController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::prefix('admin')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/events', [EventController::class, 'index'])->name('admin.events');

     Route::get('leads/{category}', [LeadController::class, 'category'])
        ->name('admin.leads.category');

    Route::post('leads/bulk-delete', [LeadController::class, 'bulkDelete']
)->name('admin.leads.bulk-delete');

Route::post('leads/import', [LeadController::class, 'import']
)->name('admin.leads.import');

Route::post('leads/store', [LeadController::class, 'store'])
    ->name('admin.leads.store');

    Route::put('leads/{lead}', [LeadController::class, 'update'])
    ->name('admin.leads.update');

    Route::get('view-leads/{lead}', [LeadController::class, 'show'])
    ->name('admin.leads.show');

Route::delete('delete-lead/{lead}', [LeadController::class, 'destroy'])
    ->name('admin.lead.destroy');

    Route::get('calendar', [CalendarController::class, 'index'])
    ->name('admin.calendar');



// New URLs for the package
Route::group(['namespace' => 'Latfur\Event\Http\Controllers'], function () {
    Route::get('my-events', [EventController::class, 'index'])->name('event');
    Route::get('my-events-list', [EventController::class, 'event_list']);
    Route::post('my-events', [EventController::class, 'save_event']);
    Route::get('all-my-events', [EventController::class, 'all_event'])->name('all-event');
    Route::get('single-my-event/{id}', [EventController::class, 'single_event']);
    Route::post('update-my-event', [EventController::class, 'update_event']);
    Route::delete('delete-my-event/{id}', [EventController::class, 'delete_event']);
});


});

Route::get('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
