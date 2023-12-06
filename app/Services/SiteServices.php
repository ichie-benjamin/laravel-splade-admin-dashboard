<?php

namespace App\Services;

use App\Models\Site;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use ProtoneMedia\Splade\Facades\Toast;

class SiteServices
{
    public function createOrUpdateCompany(Site $site): void
    {
        $company = $site;
        $new_site = Site::findOrFail($site->id);
        $company->db_name = "befdzwjv_livetrader_".$site->id;
        $company->db_user = "befdzwjv_livetrader";
        $company->db_password = env('LIVETRADER_PASS');

        $auth_key = env('SECRET_KEY');
        try {
            $response = Http::post(env('LIVETRADER_ENDPOINT'), [
                'secret_key' => $auth_key,
                'company' => $company,
            ])->throw()->json();

            $content = json_encode($response); // Response content

            Log::debug("Response content: ", (array)$content);

            //UPDATE COMPANY
            $report['db_migrated'] = $response['db_migrated'];
            $report['env_updated'] = $response['env_updated'];


            $new_site->update([
                'report' => $report,
                'status' => 'active'
            ]);

        } catch (\Illuminate\Http\Client\RequestException $e) {
            Log::error('HTTP Request failed: ' . $e->getMessage());
            $new_site->status = 'failed';
            Toast::danger($e->getMessage());
        } catch (\Exception $e) {
            Log::error('An error occurred: ' . $e->getMessage());
            $new_site->status = 'failed';
            Toast::danger($e->getMessage());
        }

        $new_site->save();

    }
}
