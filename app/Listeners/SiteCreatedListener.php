<?php

namespace App\Listeners;

use App\Events\SiteCreated;
use App\Services\SiteServices;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use ProtoneMedia\Splade\Facades\Toast;

class SiteCreatedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(SiteCreated $event): void
    {
        $site = $event->site;

        $site->status = 'processing';

        $site->save();

        $siteService = new SiteServices();

        $siteService->createOrUpdateCompany($site);

    }
}
