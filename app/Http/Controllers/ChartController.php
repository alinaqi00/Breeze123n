<?php

// app/Http/Controllers/ChartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Charts\Facades\Charts;
use App\Models\Post;
use App\Models\Product;

class ChartController extends Controller
{
    public function showCharts()
    {
        // Fetch data from the Post model
        $postChartData = Post::all()->countBy('category');

        // Fetch data from the Product model
        $productChartData = Product::all()->pluck('name', 'price');

        // Create a Pie Chart for Post data
        $pieChart = Charts::create('pie', 'chartjs')
            ->title('Post Categories')
            ->labels($postChartData->keys())
            ->values($postChartData->values())
            ->dimensions(400, 300);

        // Create an Area Chart for Product data
        $areaChart = Charts::create('area', 'chartjs')
            ->title('Product Prices')
            ->labels($productChartData->keys())
            ->values($productChartData->values())
            ->dimensions(400, 300);

        // Return the chart view with both charts
        return view('charts.show', ['pieChart' => $pieChart, 'areaChart' => $areaChart]);
    }
}
