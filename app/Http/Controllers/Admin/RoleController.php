<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Tables\RoleTable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\Facades\Toast;

class RoleController extends Controller
{
    public function create(){
        return view('admin.roles.create');
    }

    public function index(){
        return view('admin.roles.index', [
            'data' => Splade::onLazy(fn () => RoleTable::class),
        ]);
    }

    public function permissions(Role $role){

        return view('admin.roles.permissions', [
            'permissions' => Splade::onLazy(fn () => Permission::pluck('name','id')->toArray()),
            'role' => $role
        ]);
    }

    public function updatePermissions(Request $request){

//        dd($request->all());

        $role_id = $request->input('id');
        $role = Role::findOrFail($role_id);
        $role->syncPermissions($request->input('permissions'));
        Toast::title($role->name.' permissions successfully updated');
        return redirect()->back();
    }

    public function edit(Role $role){
        return view('admin.roles.edit', compact('role'));
    }


    public function destroy(Role $role){
        $role->delete();
        Toast::title('Role deleted successfully');
        return redirect()->back();
    }

    public function store(Request $request){
        $data = $this->validateData($request);
        Role::create($data);
        Toast::title('Role created successfully');
        return redirect()->back();
    }

    public function toggle($type, $id): RedirectResponse
    {
        $role = Role::findOrFail($id);
        if($type == 'featured'){
            $role->is_featured = !$role->is_featured;
        }else{
            $role->status = !$role->status;
        }
        $role->save();
        Toast::title('Role updated successfully');
        return redirect()->back();
    }

    private function validateData(Request $request, $id = null): array
    {
        $rules = [
            'name' => ['required','unique:roles,name,' . $id],
            'display_name' => 'nullable',
            'description' => 'nullable',
        ];

        return $request->validate($rules);
    }


}
