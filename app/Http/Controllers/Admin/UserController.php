<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Tables\UserTable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\Facades\Toast;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:users-create')->only('create');
        $this->middleware('permission:users-store')->only('store');
        $this->middleware('permission:users-update')->only('update','edit');
        $this->middleware('permission:users-read')->only('index','show');
        $this->middleware('permission:users-delete')->only('destroy');
    }

    public function create(){
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    public function index(){
        return view('admin.users.index', [
            'data' => Splade::onLazy(fn () => UserTable::class),
        ]);
    }

    public function permissions(User $user){

        return view('admin.users.permissions', [
            'permissions' => Splade::onLazy(fn () => Permission::pluck('name','id')->toArray()),
            'user' => $user
        ]);
    }

    public function updatePermissions(Request $request){

//        dd($request->all());

        $role_id = $request->input('id');
        $user = User::findOrFail($role_id);
        $user->syncPermissions($request->input('permissions'));
        Toast::title($user->name.' permissions successfully updated');
        return redirect()->back();
    }

    public function edit(User $user){
        $roles = Role::all();
        return view('admin.users.edit', compact('user','roles'));
    }


    public function destroy(User $user){
        $user->delete();
        Toast::title('User deleted successfully');
        return redirect()->back();
    }

    public function store(Request $request){
        $data = $this->validateData($request);
        $data['password']  = bcrypt($data['password']);
        $user = User::create($data);
        $user->addRole($data['role']);
        Toast::title('User created successfully');
        return redirect()->back();
    }

    public function update(Request $request, $id){
        $data = $this->validateData($request, $id);
        $user = User::findOrFail($id);
        if($data['password']){
            $data['password']  = bcrypt($data['password']);
        }

        if(isset($data['role'])){
            $user->syncRoles([$data['role']]);
        }
        $data = array_filter($data, function ($value) {
            return $value !== null;
        });
        $user->update($data);

        Toast::title('User updated successfully');
        return redirect()->back();
    }

    public function toggle($type, $id): RedirectResponse
    {
        $user = User::findOrFail($id);
        if($type == 'featured'){
            $user->is_featured = !$user->is_featured;
        }else{
            $user->status = !$user->status;
        }
        $user->save();
        Toast::title('User updated successfully');
        return redirect()->back();
    }

    private function validateData(Request $request, $id = null): array
    {
        $rules = [
            'email' => ['required','unique:users,email,' . $id],
            'first_name' => 'required',
            'last_name' => 'nullable',
            'password' => $id ? 'nullable' : 'required',
            'role' =>  $id ? 'nullable' : 'required',
        ];

        return $request->validate($rules);
    }

}
