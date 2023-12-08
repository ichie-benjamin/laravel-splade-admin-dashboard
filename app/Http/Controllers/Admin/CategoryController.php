<?php

namespace App\Http\Controllers\Admin;

use App\Forms\CreateCategoryForm;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Site;
use App\Tables\CategoryTable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\Facades\Toast;


class CategoryController extends Controller
{
    public function create(){
        return view('admin.categories.create');
    }

    public function createSub(){
        return view('admin.categories.create_sub');
    }

    public function index(){
        return view('admin.categories.index', [
            'data' => Splade::onLazy(fn () => CategoryTable::class),
        ]);
    }
    public function subCategories(){
        return view('admin.categories.sub_categories', [
            'data' => new CategoryTable('sub_category'),
        ]);
    }
    public function edit(Site $site){
        return view('admin.categories.edit', compact('site'));
    }


    public function destroy(Category $category){
        $category->delete();
        Toast::title('Category deleted successfully');
        return redirect()->back();
    }

    public function store(Request $request){
        $data = $this->validateData($request);
        Category::create($data);
        Toast::title('Category created successfully');
        return redirect()->back();
    }

    public function toggle($type, $id): RedirectResponse
    {
        $category = Category::findOrFail($id);
        if($type == 'featured'){
            $category->is_featured = !$category->is_featured;
        }else{
            $category->status = !$category->status;
        }
        $category->save();
        Toast::title('Category updated successfully');
        return redirect()->back();
    }


    private function validateData(Request $request, $id = null): array
    {
        $rules = [
            'name' => ['required','unique:categories,name,' . $id],
            'icon' => 'nullable',
            'status' => 'nullable',
            'category_id' => 'nullable',
            'description' => 'nullable',
            'color' => 'nullable',
        ];

        return $request->validate($rules);
    }


}
