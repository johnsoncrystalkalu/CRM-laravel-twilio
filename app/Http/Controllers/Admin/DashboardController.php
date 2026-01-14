<?php

namespace App\Http\Controllers\Admin;

use App\Models\Call;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function index()
{
    $recoveryLeadsCount = Lead::where('category', 'Recovery')->count();
    $tradingLeadsCount  = Lead::where('category', 'Trading')->count();
    $adminCount         = User::where('role', 'is_admin')->count();
    $callCount         = Call::count();

   // $tradingLeadsCount = 66666;
    return view('admin.dashboard', compact('recoveryLeadsCount', 'tradingLeadsCount', 'adminCount', 'callCount'));
}
}
