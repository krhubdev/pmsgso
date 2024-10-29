<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\InventorySlipController;
use App\Http\Controllers\RecipientController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustodianController;
use App\Http\Controllers\ArticleItemController;


Route::get('/', function () {
    return redirect('/login');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // ** Recipient ** //
    Route::get('/recipients', [RecipientController::class, 'index']);
    Route::post('/recipient/save', [RecipientController::class, 'store'])->name('recipient.store');

    // ** Employee ** //
    Route::get('/employees', [EmployeeController::class, 'index']);
    Route::post('/employee/save', [EmployeeController::class, 'store'])->name('employee.store'); 
    
    // ** Employee ** //
    Route::get('/custodians', [CustodianController::class, 'index']);
    Route::post('/custodian/save', [CustodianController::class, 'store'])->name('custodian.store');

    // ** Article / Items ** //
    Route::get('/article-items', [ArticleItemController::class, 'index']);
    Route::post('/article-items/save', [ArticleItemController::class, 'store'])->name('article-items.store');

    // ** Inventory ** //
    Route::get('/inventory', [InventoryController::class, 'index']);
    Route::post('/inventory/save', [InventoryController::class, 'store'])->name('inventory.store');

    // ** Inventory Slips ** //
    Route::get('/slips', [InventorySlipController::class, 'index']);
    Route::post('/slips/save', [InventorySlipController::class, 'store'])->name('inventory.slip.store');

    // ** Reports ** //
    Route::get('/reports', [ArticleItemController::class, 'reports']);
    Route::get('/print/reports', [ArticleItemController::class, 'print_reports']);

    Route::get('/ics-sticker', [ArticleItemController::class, 'ics_sticker']);
    Route::get('/ics-sticker/details/{id}', [ArticleItemController::class, 'ics_sticker_details']);

    
    Route::get('/dashboard', [ArticleItemController::class, 'dashboard']);

});
