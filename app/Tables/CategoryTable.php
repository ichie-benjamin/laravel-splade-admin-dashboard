<?php

namespace App\Tables;

use App\Models\Category;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class CategoryTable extends AbstractTable
{
    public string $type = 'category';
    public function __construct($type = 'category')
    {
        $this->type = $type;
    }

    public function authorize(Request $request)
    {
        return true;
    }

    public function for()
    {
        if($this->type == 'sub_category'){
            return Category::query()->whereNotNull('category_id');
        }else{
            return Category::query()->whereNull('category_id');
        }
    }

    public function configure(SpladeTable $table): void
    {
        $table
            ->withGlobalSearch(columns: ['name','description'])
            ->defaultSort('created_at','desc')

            ->column(key: 'name', sortable: true)
            ->column(key: $this->type == 'sub_category' ?  'category.name' : 'description', sortable: true)
//            ->column(key: 'description', sortable: true, hidden:)
            ->column(key: 'is_featured', sortable: true)
            ->column(key: 'status', sortable: true)
            ->column(key: 'created_at', sortable: true, hidden: true)
            ->column('actions')
            ->bulkAction(
                label: 'Delete selected',
                each: fn (Category $category) => $category->delete(),
                before: fn () => info('Deleting selected categories'),
                after: fn () => Toast::info('Categories deleted!')
            )
            ->paginate(10);
            // ->bulkAction()
            // ->export()
    }
}
