<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data['count_users'] = User::select('id')->count();
        return view('admin.pages.dashboard.index', compact('data'));
    }
}
