<?php

namespace App\Tables;


use App\Models\User;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\SpladeTable;

class UserTable extends AbstractTable
{
    public mixed $role;
    public function __construct($role = null)
    {
        $this->role = $role;
    }


    public function authorize(Request $request)
    {
        return true;
    }

    public function for()
    {
        if($this->role){
            return User::query()->whereHasRole($this->role);
        }else{
            return User::query();
        }

    }

    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['first_name','last_name','email'])
            ->defaultSort('created_at','desc')
            ->column(key: 'first_name', sortable: true)
            ->column(key: 'last_name', sortable: true)
            ->column(key: 'email', sortable: true)
            ->column(key: 'roles.name', sortable: false)
            ->column(key: 'created_at', sortable: true, hidden: true)
            ->column('actions')
            ->paginate(10);
    }

}
