<?php

namespace App\Services;


use App\Models\Post;
use App\Models\User;

class StatisticsService
{
    public function getStatistics(): array
    {
        return [
            [
                'title' => 'Total Posts',
                'value' => Post::count(),
                'icon' => asset('images/icons/company.svg'),
            ],[
                'title' => 'Published Posts',
                'value' => Post::whereStatus('active')->count(),
                'icon' => asset('images/icons/company.svg'),
            ],[
                'title' => 'Unpublished Posts',
                'value' => Post::where('status','!=', 'active')->count(),
                'icon' => asset('images/icons/company.svg'),
            ],[
                'title' => 'Total Users',
                'value' => User::whereHasRole(['user','customer'])->count(),
                'icon' => asset('images/icons/items.svg'),
            ]
        ];
    }
}
