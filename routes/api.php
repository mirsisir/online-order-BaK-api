<?php

use App\Http\Controllers\ChecklistsController;
use App\Http\Controllers\CleaningChargesController;
use App\Http\Controllers\CleaningTypesController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\FaqContentsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceOrdersController;
use App\Models\cleaningCharge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::middleware('auth:api')->group( function () {
    Route::get('user', function (){
        return auth()->user();
    });

});

Route::get('/faq', [FaqContentsController::class, 'faq_list'])->name('faq_contents.faq_content.index');

Route::get('/40checklists', [ChecklistsController::class, 'checklists40'])->name('checklists40');
Route::get('/50checklists', [ChecklistsController::class, 'checklists50'])->name('checklists50');

Route::get('/service_charge', [CleaningChargesController::class, 'service_charge'])->name('service_charge');
Route::get('/service_type', [CleaningTypesController::class, 'service_type'])->name('service_type');

Route::post('/valid_coupons', [CouponsController::class, 'valid_coupons'])->name('valid_coupons');

Route::post('/booking', [ServiceOrdersController::class, 'booking'])->name('booking');
