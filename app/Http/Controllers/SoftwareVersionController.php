<?php

namespace App\Http\Controllers;

use App\Models\Software;
use App\Models\SoftwareVersion;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\FileUploads\HandleSpladeFileUploads;
use ProtoneMedia\Splade\SpladeTable;

class SoftwareVersionController extends Controller
{

    public function index(){
//        $software = $request->get('software_id');
        return view('dashboard.versions.index', [
            'data' => SpladeTable::for(SoftwareVersion::class)
                ->withGlobalSearch(columns: ['version','software_id','title'])
                ->defaultSort('version')
                ->column(key: 'version', sortable: true)
                ->column(key: 'software_id', sortable: true)
                ->column(key: 'title', sortable: true)
                ->column(key: 'description')
                ->column('created_at')
                ->column('download')

                ->column('actions')
                ->selectFilter(
                    key: 'software_id',
                    options: Software::pluck('name','software_id')->toArray(),
                    label: 'Software',
                    noFilterOption: true,
                    noFilterOptionLabel: 'All Software')
                ->paginate(15),
        ]);
    }

    public function store(Request $request){
        $validated = $this->validateData($request);

        HandleSpladeFileUploads::forRequest($request);


        if($request->hasFile('file')){
            $path = $validated['software_id'].'/versions';

            $filepath = $request->file('file')->store($path,'public');

            $validated['file'] = asset('storage/'.$filepath);
        }

        SoftwareVersion::create($validated);
        Toast::title('Version added successfully');
        return redirect()->back();
    }

    public function update(Request $request, SoftwareVersion $version){
        $validated = $this->validateData($request, $version->id);

        HandleSpladeFileUploads::forRequest($request);


        if($request->hasFile('file')){
            $path = $validated['software_id'].'/versions';

            $filepath = $request->file('file')->store($path,'public');

            $validated['file'] = asset('storage/'.$filepath);
        }

        $version->update($validated);

        Toast::title('Version updated successfully');

        return redirect()->back();
    }

    public function create(Request $request){
        $version = [
            'software_id' => $request->get('software_id')
        ];
        $software = Software::pluck('name','software_id')->toArray();
        return view('dashboard.versions.create', compact('software','version'));
    }
    public function edit(SoftwareVersion $version){
        $software = Software::pluck('name','software_id')->toArray();
        return view('dashboard.versions.edit', compact('software','version'));
    }

    public function destroy(SoftwareVersion $version){
        $version->delete();
        Toast::title('Version deleted successfully');
        return redirect()->back();
    }
    private function validateData(Request $request, $id = null): array
    {
        $rules = [
            'software_id' => 'required',
            'version' => ['required',Rule::unique('software_versions')
                ->where('software_id', $request->software_id)
                ->ignore($id)
            ],
            'file' => 'nullable',
            'title' => 'nullable',
            'description' => 'required',
        ];

        return $request->validate($rules);
    }

}
