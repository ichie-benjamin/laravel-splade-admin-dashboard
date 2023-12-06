<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\Software;
use App\Tables\SitesTable;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class MainController extends Controller
{
    public function software(){

        return view('dashboard.software', [
            'data' => SpladeTable::for(Software::class)
                ->defaultSort('name')
                ->column(key: 'name', sortable: true)
                ->column('software_id')
                ->column('created_at')
                ->paginate(15),
        ]);
    }
    public function sites(){

        return view('dashboard.sites', [
            'data' => SitesTable::class
        ]);
    }

    public function createSoftware(){
        return view('dashboard.software-create');
    }
    public function createSite(){
        return view('dashboard.site-create');
    }
    public function editSite(Site $site){
        return view('dashboard.site-edit', compact('site'));
    }

    public function deleteSite(Site $site){
        $site->delete();
        Toast::title('License deleted successfully');
        return redirect()->back();
    }

    public function storeSite(Request $request){
        $validated = $request->validate([
            'license' => 'required|min:1'
        ]);

        $numberOfRecords = $validated['license'];

        for ($i = 0; $i < $numberOfRecords; $i++) {
            $site = new Site();
            $site->save();
            $site->license = $site->id;
            $site->save();
        }


        Toast::title($numberOfRecords .' License generated successfully');
        return redirect()->back();
    }
    public function updateSite(Request $request, Site $site){
        $validated = $request->validate([
            'license' => 'required|min:1',
            'domain' => 'required|min:1',
            'buyer_name' => 'required|min:1',
        ]);
        $site->update($validated);
        Toast::title(' License updated successfully');
        return redirect()->back();
    }
}
