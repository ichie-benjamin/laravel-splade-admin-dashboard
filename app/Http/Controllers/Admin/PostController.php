<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Tables\PostTable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\FileUploads\HandleSpladeFileUploads;

class PostController extends Controller
{
    public function create(){
        return view('admin.posts.create');
    }

    public function index(){
        return view('admin.posts.index', [
            'data' => Splade::onLazy(fn () => PostTable::class),
        ]);
    }

    public function edit(Post $post){
        return view('admin.posts.edit', compact('post'));
    }


    public function destroy(Post $post){
        $post->delete();
        Toast::title('Post deleted successfully');
        return redirect()->back();
    }


    public function toggle($id): RedirectResponse
    {
        $post = Post::findOrFail($id);
        $post->featured = !$post->featured;
        $post->save();
        Toast::title('Post updated successfully');
        return redirect()->back();
    }

    public function store(Request $request){
        $data = $this->validateData($request);

        HandleSpladeFileUploads::forRequest($request);

        if($request->hasFile('featured_image')){
            $path = 'posts/'.auth()->id();

            $filepath = $request->file('featured_image')->store($path,'public');

            $data['featured_image'] = asset('storage/'.$filepath);
        }

        $data['user_id'] = auth()->id();

        $post = Post::create($data);

        $post->categories()->attach($data['categories']);

        Toast::title('Post created successfully');
        return redirect()->back();
    }

    private function validateData(Request $request, $id = null): array
    {
        $rules = [
            'title' => ['required','unique:posts,title,' . $id],
            'excerpt' => 'nullable',
            'text' => 'nullable',
            'tags' => 'nullable',
            'categories' => 'nullable',
        ];

        return $request->validate($rules);
    }

}
