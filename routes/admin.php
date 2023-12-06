<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->prefix('panel')->as('admin.')->group(function () {
    Route::get('/', [AdminController::class,'dashboard'])->name('dashboard');

    Route::get('roles/{role}/permissions', [RoleController::class,'permissions'])->name('roles.permissions');
    Route::post('roles/update/permissions', [RoleController::class,'updatePermissions'])->name('roles.permissions.update');
    Route::post('permissions/generate/all', [PermissionController::class,'generateAllPermission'])->name('permissions.generate');

    Route::resource('categories', CategoryController::class);
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);


    Route::post('categories/toggle_featured/{type}/{id}', [CategoryController::class,'toggle'])->name('category.toggle');
    Route::get('sub_categories', [CategoryController::class,'subCategories'])->name('sub_categories.index');
    Route::get('create/subcategory', [CategoryController::class,'createSub'])->name('categories.create_sub');
});
