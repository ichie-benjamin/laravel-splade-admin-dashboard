<?php

namespace App\Services;

use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

class PermissionServices
{
    public function generateCrudPermissions(): array
    {
        $models = $this->getAllModels();

        $permissions = [];

        foreach ($models as $model) {
            $modelName = strtolower(class_basename($model));

            $permissions = array_merge($permissions, [
                $modelName . '-create',
                $modelName . '-delete',
                $modelName . '-update',
                $modelName . '-store',
                $modelName . '-edit',
                $modelName . '-read-owner',
            ]);
        }

        return $permissions;
    }
    protected function getAllModels(): array
    {
        $path = app_path('Models'); // Assuming models are in the 'Models' folder
        $models = [];

        foreach (glob("$path/*.php") as $file) {
            $model = 'App\Models\\' . basename($file, '.php');

            if (is_subclass_of($model, Model::class)) {
                $models[] = new $model();
            }
        }

        return $models;
    }

    public function generatePermissionsByRoute(): array
    {
        $routeCollection = Route::getRoutes(); // Get all registered routes

        $permissions = [];

        foreach ($routeCollection as $route) {
            $routeName = $route->getName();

            if ($routeName && str_starts_with($routeName, 'admin.')) {
                $permissionFullName = str_replace('.', '-', $routeName);
                $permissionName = str_replace('admin-', '', $permissionFullName);
                $permissions[] = [
                    'name' => $permissionName,
                    'display_name' => str_replace('-', ' ', $permissionName),
                    'description' => str_replace('-', ' ', $permissionName),
                ];
            }
        }

        return $permissions;
    }

    public function storeMissingPermissions(){
        $permissions = $this->generatePermissionsByRoute();
        foreach ($permissions as $permissionData) {
            $permissionName = $permissionData['name'];
            $existingPermission = Permission::where('name', $permissionName)->first();
            if (!$existingPermission) {
                Permission::create($permissionData);
            }
        }
    }
}
