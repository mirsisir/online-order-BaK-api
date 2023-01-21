<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqCategoriesController;
use App\Http\Controllers\FaqContentsController;
use App\Http\Controllers\ChecklistCategoriesController;
use App\Http\Controllers\ChecklistsController;
use App\Http\Controllers\CleaningTypesController;
use App\Http\Controllers\CleaningChargesController;
use App\Http\Controllers\ServiceOrdersController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\GeneralSettingsController;
use App\Http\Controllers\EmployeesController;




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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('admin.dashboard');
});


Route::get('/layout', function () {
    return view('layouts.admin_base');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {


Route::group([
    'prefix' => 'faq_categories',
], function () {
    Route::get('/', [FaqCategoriesController::class, 'index'])
         ->name('faq_categories.faq_category.index');
    Route::get('/create', [FaqCategoriesController::class, 'create'])
         ->name('faq_categories.faq_category.create');
    Route::get('/show/{faqCategory}',[FaqCategoriesController::class, 'show'])
         ->name('faq_categories.faq_category.show')->where('id', '[0-9]+');
    Route::get('/{faqCategory}/edit',[FaqCategoriesController::class, 'edit'])
         ->name('faq_categories.faq_category.edit')->where('id', '[0-9]+');
    Route::post('/', [FaqCategoriesController::class, 'store'])
         ->name('faq_categories.faq_category.store');
    Route::put('faq_category/{faqCategory}', [FaqCategoriesController::class, 'update'])
         ->name('faq_categories.faq_category.update')->where('id', '[0-9]+');
    Route::delete('/faq_category/{faqCategory}',[FaqCategoriesController::class, 'index'])
         ->name('faq_categories.faq_category.destroy')->where('id', '[0-9]+');
});


Route::group([
    'prefix' => 'faq_contents',
], function () {
    Route::get('/', [FaqContentsController::class, 'index'])
         ->name('faq_contents.faq_content.index');
    Route::get('/create', [FaqContentsController::class, 'create'])
         ->name('faq_contents.faq_content.create');
    Route::get('/show/{faqContent}',[FaqContentsController::class, 'show'])
         ->name('faq_contents.faq_content.show')->where('id', '[0-9]+');
    Route::get('/{faqContent}/edit',[FaqContentsController::class, 'edit'])
         ->name('faq_contents.faq_content.edit')->where('id', '[0-9]+');
    Route::post('/', [FaqContentsController::class, 'store'])
         ->name('faq_contents.faq_content.store');
    Route::put('faq_content/{faqContent}', [FaqContentsController::class, 'update'])
         ->name('faq_contents.faq_content.update')->where('id', '[0-9]+');
    Route::delete('/faq_content/{faqContent}',[FaqContentsController::class, 'index'])
         ->name('faq_contents.faq_content.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'checklist_categories',
], function () {
    Route::get('/', [ChecklistCategoriesController::class, 'index'])
         ->name('checklist_categories.checklist_category.index');
    Route::get('/create', [ChecklistCategoriesController::class, 'create'])
         ->name('checklist_categories.checklist_category.create');
    Route::get('/show/{checklistCategory}',[ChecklistCategoriesController::class, 'show'])
         ->name('checklist_categories.checklist_category.show')->where('id', '[0-9]+');
    Route::get('/{checklistCategory}/edit',[ChecklistCategoriesController::class, 'edit'])
         ->name('checklist_categories.checklist_category.edit')->where('id', '[0-9]+');
    Route::post('/', [ChecklistCategoriesController::class, 'store'])
         ->name('checklist_categories.checklist_category.store');
    Route::put('checklist_category/{checklistCategory}', [ChecklistCategoriesController::class, 'update'])
         ->name('checklist_categories.checklist_category.update')->where('id', '[0-9]+');
    Route::delete('/checklist_category/{checklistCategory}',[ChecklistCategoriesController::class, 'index'])
         ->name('checklist_categories.checklist_category.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'checklists',
], function () {
    Route::get('/', [ChecklistsController::class, 'index'])
         ->name('checklists.checklist.index');
    Route::get('/create', [ChecklistsController::class, 'create'])
         ->name('checklists.checklist.create');
    Route::get('/show/{checklist}',[ChecklistsController::class, 'show'])
         ->name('checklists.checklist.show')->where('id', '[0-9]+');
    Route::get('/{checklist}/edit',[ChecklistsController::class, 'edit'])
         ->name('checklists.checklist.edit')->where('id', '[0-9]+');
    Route::post('/', [ChecklistsController::class, 'store'])
         ->name('checklists.checklist.store');
    Route::put('checklist/{checklist}', [ChecklistsController::class, 'update'])
         ->name('checklists.checklist.update')->where('id', '[0-9]+');
    Route::delete('/checklist/{checklist}',[ChecklistsController::class, 'index'])
         ->name('checklists.checklist.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'cleaning_types',
], function () {
    Route::get('/', [CleaningTypesController::class, 'index'])
         ->name('cleaning_types.cleaning_type.index');
    Route::get('/create', [CleaningTypesController::class, 'create'])
         ->name('cleaning_types.cleaning_type.create');
    Route::get('/show/{cleaningType}',[CleaningTypesController::class, 'show'])
         ->name('cleaning_types.cleaning_type.show')->where('id', '[0-9]+');
    Route::get('/{cleaningType}/edit',[CleaningTypesController::class, 'edit'])
         ->name('cleaning_types.cleaning_type.edit')->where('id', '[0-9]+');
    Route::post('/', [CleaningTypesController::class, 'store'])
         ->name('cleaning_types.cleaning_type.store');
    Route::put('cleaning_type/{cleaningType}', [CleaningTypesController::class, 'update'])
         ->name('cleaning_types.cleaning_type.update')->where('id', '[0-9]+');
    Route::delete('/cleaning_type/{cleaningType}',[CleaningTypesController::class, 'index'])
         ->name('cleaning_types.cleaning_type.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'cleaning_charges',
], function () {
    Route::get('/', [CleaningChargesController::class, 'index'])
         ->name('cleaning_charges.cleaning_charge.index');
    Route::get('/create', [CleaningChargesController::class, 'create'])
         ->name('cleaning_charges.cleaning_charge.create');
    Route::get('/show/{cleaningCharge}',[CleaningChargesController::class, 'show'])
         ->name('cleaning_charges.cleaning_charge.show')->where('id', '[0-9]+');
    Route::get('/{cleaningCharge}/edit',[CleaningChargesController::class, 'edit'])
         ->name('cleaning_charges.cleaning_charge.edit')->where('id', '[0-9]+');
    Route::post('/', [CleaningChargesController::class, 'store'])
         ->name('cleaning_charges.cleaning_charge.store');
    Route::put('cleaning_charge/{cleaningCharge}', [CleaningChargesController::class, 'update'])
         ->name('cleaning_charges.cleaning_charge.update')->where('id', '[0-9]+');
    Route::delete('/cleaning_charge/{cleaningCharge}',[CleaningChargesController::class, 'index'])
         ->name('cleaning_charges.cleaning_charge.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'service_orders',
], function () {
    Route::get('/', [ServiceOrdersController::class, 'index'])
         ->name('service_orders.service_order.index');
    Route::get('/create', [ServiceOrdersController::class, 'create'])
         ->name('service_orders.service_order.create');
    Route::get('/show/{serviceOrder}',[ServiceOrdersController::class, 'show'])
         ->name('service_orders.service_order.show')->where('id', '[0-9]+');
    Route::get('/{serviceOrder}/edit',[ServiceOrdersController::class, 'edit'])
         ->name('service_orders.service_order.edit')->where('id', '[0-9]+');
    Route::post('/', [ServiceOrdersController::class, 'store'])
         ->name('service_orders.service_order.store');
    Route::put('service_order/{serviceOrder}', [ServiceOrdersController::class, 'update'])
         ->name('service_orders.service_order.update')->where('id', '[0-9]+');
    Route::delete('/service_order/{serviceOrder}',[ServiceOrdersController::class, 'index'])
         ->name('service_orders.service_order.destroy')->where('id', '[0-9]+');
});

    Route::get('/calender', [ServiceOrdersController::class, 'calender'])
        ->name('calender');

Route::group([
    'prefix' => 'coupons',
], function () {
    Route::get('/', [CouponsController::class, 'index'])
         ->name('coupons.coupon.index');
    Route::get('/create', [CouponsController::class, 'create'])
         ->name('coupons.coupon.create');
    Route::get('/show/{coupon}',[CouponsController::class, 'show'])
         ->name('coupons.coupon.show')->where('id', '[0-9]+');
    Route::get('/{coupon}/edit',[CouponsController::class, 'edit'])
         ->name('coupons.coupon.edit')->where('id', '[0-9]+');
    Route::post('/', [CouponsController::class, 'store'])
         ->name('coupons.coupon.store');
    Route::put('coupon/{coupon}', [CouponsController::class, 'update'])
         ->name('coupons.coupon.update')->where('id', '[0-9]+');
    Route::delete('/coupon/{coupon}',[CouponsController::class, 'index'])
         ->name('coupons.coupon.destroy')->where('id', '[0-9]+');
});


});

Route::group([
    'prefix' => 'general_settings',
], function () {
    Route::get('/', [GeneralSettingsController::class, 'index'])
         ->name('general_settings.general_settings.index');
    Route::get('/create', [GeneralSettingsController::class, 'create'])
         ->name('general_settings.general_settings.create');
    Route::get('/show/{generalSettings}',[GeneralSettingsController::class, 'show'])
         ->name('general_settings.general_settings.show')->where('id', '[0-9]+');
    Route::get('/{generalSettings}/edit',[GeneralSettingsController::class, 'edit'])
         ->name('general_settings.general_settings.edit')->where('id', '[0-9]+');
    Route::post('/', [GeneralSettingsController::class, 'store'])
         ->name('general_settings.general_settings.store');
    Route::put('general_settings/{generalSettings}', [GeneralSettingsController::class, 'update'])
         ->name('general_settings.general_settings.update')->where('id', '[0-9]+');
    Route::delete('/general_settings/{generalSettings}',[GeneralSettingsController::class, 'index'])
         ->name('general_settings.general_settings.destroy')->where('id', '[0-9]+');
});

Route::group([
    'prefix' => 'employees',
], function () {
    Route::get('/', [EmployeesController::class, 'index'])
         ->name('employees.employee.index');
    Route::get('/create', [EmployeesController::class, 'create'])
         ->name('employees.employee.create');
    Route::get('/show/{employee}',[EmployeesController::class, 'show'])
         ->name('employees.employee.show')->where('id', '[0-9]+');
    Route::get('/{employee}/edit',[EmployeesController::class, 'edit'])
         ->name('employees.employee.edit')->where('id', '[0-9]+');
    Route::post('/', [EmployeesController::class, 'store'])
         ->name('employees.employee.store');
    Route::put('employee/{employee}', [EmployeesController::class, 'update'])
         ->name('employees.employee.update')->where('id', '[0-9]+');
    Route::delete('/employee/{employee}',[EmployeesController::class, 'index'])
         ->name('employees.employee.destroy')->where('id', '[0-9]+');
});
