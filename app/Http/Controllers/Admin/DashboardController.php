<?php

namespace App\Http\Controllers\Admin;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function index()
{
    $recoveryLeadsCount = Lead::where('lead_type', 'Recovery')->count();
    $tradingLeadsCount  = Lead::where('lead_type', 'Trading')->count();
    $usersCount         = User::count();

    return view('admin.dashboard', compact('recoveryLeadsCount', 'tradingLeadsCount', 'usersCount'));
}
}
