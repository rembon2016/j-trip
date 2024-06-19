<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Models\Tour;
use App\Models\User;
use App\Models\Destination;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Helpers\Utilities\RandomGenerator;

class DashboardController extends Controller
{
    public function index()
    {
        // Count Data
        $data['count_admin'] = User::where('role', User::ADMIN_ROLE)->count('id');
        $data['count_staff'] = User::where('role', User::STAFF_ROLE)->count('id');
        $data['count_destination'] = Destination::count('id');
        $data['count_tour'] = Tour::count('id');

        // Tour Graphic Data
        $tourVisitors = Tour::select('title', 'total_visitor')->where('total_visitor', '>=', 1)->get();
        $data['tour_line_graph']['categories'] = $tourVisitors->map(fn ($item) => $item->title);
        $data['tour_line_graph']['series'] = $tourVisitors->map(fn ($item) => $item->total_visitor);

        // Destination Graphic Data
        $destinationVisitors = Destination::select('title', 'total_visitor')->where('total_visitor', '>=', 1)->get();
        $data['destination_donut_graph'] = $destinationVisitors->map(function ($item) use ($destinationVisitors) {
            return [
                'title' => $item->title,
                'total_visitor' => $item->total_visitor,
                'percentage' => round(
                    ($item->total_visitor / $destinationVisitors->sum('total_visitor')) * 100
                ),
                'color' => RandomGenerator::generateRandomColor()
            ];
        });

        $maxPercentage = $data['destination_donut_graph']->max('percentage');
        $data['index_max_donut_graph'] = $data['destination_donut_graph']->search(fn ($item) => $item['percentage'] == $maxPercentage);

        return view('admin.pages.dashboard.index', compact('data'));
    }
}
