<?php

use App\Models\Lead;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\CallController;
use App\Http\Controllers\Admin\LeadController;

use App\Http\Controllers\Admin\CalendarController;
use Latfur\Event\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;


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

    Route::post('leads-call/{lead}/call', [LeadController::class, 'callLead'])
    ->name('admin.leads.call');


       Route::get('calendar', [CalendarController::class, 'index'])
    ->name('admin.calendar');

    Route::get('twilio/twiml/{lead}', function (Lead $lead) {
    $xml = "<?xml version='1.0' encoding='UTF-8'?>
        <Response>
            <Say voice='alice'>Hello, this is a call regarding your lead status. Please check your email for details.</Say>
        </Response>";
    return response($xml, 200)->header('Content-Type', 'text/xml');
})->name('admin.twilio.twiml');

Route::get('admin/twilio/dialer-twiml', function () {
    return response(
        "<?xml version='1.0' encoding='UTF-8'?>
        <Response>
            <Say voice='alice'>
                This call was initiated from the CRM dialer.
            </Say>
        </Response>",
        200
    )->header('Content-Type', 'text/xml');
})->name('admin.twilio.dialer.twiml');


Route::get('calls', [CallController::class, 'index'])
    ->name('admin.calls.index');

    // Show dialer page
Route::get('admin/dialer', function () {
    return view('admin.dialer.index');
})->name('admin.dialer');

// Handle the call request
Route::post('dialer/call', [LeadController::class, 'callNumber'])
    ->name('admin.dialer.call');


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
