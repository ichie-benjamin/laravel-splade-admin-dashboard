<?php

namespace App\Tables;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class PermissionTable extends AbstractTable
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
        return Permission::query();
    }


    public function configure(SpladeTable $table)
    {
        $table
            ->withGlobalSearch(columns: ['name','description','display_name'])
            ->defaultSort('created_at','desc')
            ->column(key: 'name', sortable: true)
            ->column(key: 'display_name', sortable: true)
            ->column(key: 'description', sortable: true)
            ->column(key: 'created_at', sortable: true, hidden: true)
            ->column('actions')
            ->bulkAction(
                label: 'Delete selected',
                each: fn (Permission $role) => $role->delete(),
                before: fn () => info('Deleting selected permissions'),
                after: fn () => Toast::info('Permissions deleted!')
            )
            ->paginate(10);
    }

}
