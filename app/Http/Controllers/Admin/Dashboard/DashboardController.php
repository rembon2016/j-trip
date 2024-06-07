<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data['count_admin'] = User::select('id')->where('role', User::ADMIN_ROLE)->count();
        $data['count_staff'] = User::select('id')->where('role', User::STAFF_ROLE)->count();
        return view('admin.pages.dashboard.index', compact('data'));
    }
}
