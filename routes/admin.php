<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;

use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->prefix('panel')->as('admin.')->group(function () {
    Route::get('/', [AdminController::class,'dashboard'])->name('dashboard');

    Route::get('roles/{role}/permissions', [RoleController::class,'permissions'])->name('roles.permissions');
    Route::get('users/admins', [UserController::class,'admins'])->name('users.admins');
    Route::post('roles/update/permissions', [RoleController::class,'updatePermissions'])->name('roles.permissions.update');
    Route::post('permissions/generate/all', [PermissionController::class,'generateAllPermission'])->name('permissions.generate');

    Route::resource('categories', CategoryController::class);
    Route::resource('posts', PostController::class);
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('permissions', PermissionController::class);
    Route::resource('settings', SettingsController::class)->except('edit','update');



    Route::get('sub_categories', [CategoryController::class,'subCategories'])->name('sub_categories.index');
    Route::get('create/subcategory', [CategoryController::class,'createSub'])->name('categories.create_sub');
});

Route::middleware('auth')->prefix('panel')->as('api.')->group(function () {

    Route::post('categories/toggle_featured/{type}/{id}', [CategoryController::class,'toggle'])->name('category.toggle');
    Route::post('posts/toggle_featured/{id}', [PostController::class,'toggle'])->name('posts.toggle');

});
