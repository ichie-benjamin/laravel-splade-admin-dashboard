<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Services\StatisticsService;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Splade;

class AdminController extends Controller
{
    public function dashboard(){
        $statisticsService = new StatisticsService();

        $stats = Splade::onLazy(fn () => $statisticsService->getStatistics());
        $recent = Splade::onLazy(fn () => $this->getData());
        $chart1 = $statisticsService->getChart1();
        $chart2 = $statisticsService->getChart2();
        $chart3 = $statisticsService->getChart3();
        $chart4 = $statisticsService->getChart4();

        $chart = [
            'width' => '100%',
            'height' => '300',
            'type' => 'line',
            'options' => [
                'chart' => [
                    'id' => 'basic-bar',
                ],
                'xaxis' => [
                    'categories' => ['Jan', 'Feb', 'Mar', 'Apr', 'May'], // X-axis categories
                ],
            ],
            'series' => [
                [
                    'name' => 'Series 1',
                    'data' => [30, 40, 35, 50, 49], // Sample data for the chart
                ],
            ],
        ];
        return view('admin.dashboard', compact('chart4','chart3','chart2','chart1','chart','recent','stats'));
    }

    private function getData(): array
    {
//        sleep(30);
        return [
            'recent_posts' => [],
            'popular_posts' => [],
        ];
    }

}
