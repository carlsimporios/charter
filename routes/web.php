<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // New route for Offices page
    Route::get('/offices', function () {
        return view('pages.offices');
    })->name('offices');

    // New routes for pending requests
    Route::get('/pendings/services', function () {
        return view('pendings-folder.pending-services');
    })->name('pending.services');

    Route::get('/pendings/offices', function () {
        return view('pendings-folder.pending-offices');
    })->name('pending.offices');

    // Redirect the default pendings route to the offices route
    Route::get('/pendings', function () {
        return redirect()->route('pending.offices');
    })->name('pendings');


    // New routes for events 
    Route::get('/events', function () {
        return view('pages.events');
    })->name('events');


    Route::get('/notifications', function () {
        return view('pages.notifications');
    })->name('notifications');

    Route::get('/mvmsp', function () {
        return view('pages.mvmsp');
    })->name('mvmsp');


    Route::get('/orgchart', function () {
        return view('pages.orgchart');
    })->name('orgchart');

    Route::get('/electedofficials', function () {
        return view('pages.electedofficials');
    })->name('electedofficials');

    // routes/web.php

    Route::get('/office', function () {
        return view('offices.index');
    })->name('offices.page');

    Route::get('/event', function () {
        return view('events.index');
    })->name('events.page');

});

require __DIR__.'/auth.php';
