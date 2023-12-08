<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\StorageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\FileUploads\ExistingFile;

class SettingsController extends Controller
{
    public function index(){
        $settings = settings()->all(false);

        if(isset($settings['admin_logo'])){
            $settings['admin_logo'] = get_existing_file($settings['admin_logo']);
        }
        if(isset($settings['site_logo'])){
            $settings['site_logo'] = get_existing_file($settings['site_logo']);
        }

        return view('admin.settings.index', compact('settings'));
    }
    public function store(Request $request, StorageService $storageService){
        $data = $request->all();
//        dd($data);
        $path = 'settings';
        if($request->hasFile('site_logo')){
            $data['site_logo'] = $storageService
                ->uploadFile($request->file('site_logo'),$path);
        }
        if($request->hasFile('admin_logo')){
            $data['admin_logo'] = $storageService
                ->uploadFile($request->file('admin_logo'),$path);
        }

        $filteredData = array_filter($data, function ($value) {
            return $value !== null;
        });

//        dd($filteredData);

        try {

                settings()->set($filteredData);

        }catch (\Exception $e){
            Toast::danger($e->getMessage());
        }

        Toast::title('Settings successfully updated');

        return redirect()->back();
    }
}
