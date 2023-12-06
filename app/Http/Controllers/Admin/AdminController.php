<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
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
        return view('admin.dashboard', compact('chart'));
    }
}
