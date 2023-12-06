<?php

namespace App\Tables;


use App\Models\Role;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class RoleTable extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    public function for()
    {
        return Role::query();
    }

    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['name','description','display_name'])
            ->defaultSort('created_at','desc')
            ->column(key: 'name', sortable: true)
            ->column(key: 'display_name', sortable: true)
            ->column(key: 'description', sortable: true)
            ->column(key: 'permissions', sortable: false)
            ->column(key: 'created_at', sortable: true, hidden: true)
            ->column('actions')
            ->bulkAction(
                label: 'Delete selected',
                each: fn (Role $role) => $role->delete(),
                before: fn () => info('Deleting selected roles'),
                after: fn () => Toast::info('Roles deleted!')
            )
            ->paginate(10);
    }
}
