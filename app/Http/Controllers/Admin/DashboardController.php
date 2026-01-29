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
    $referralLeadsCount = Lead::where('category', 'Referral')->count();
    $tradingLeadsCount  = Lead::where('category', 'Trading')->count();
    $adminCount         = User::where('role', 'is_admin')->count();
    $userCount         = User::count();
    $callCount         = Call::count();

   // $tradingLeadsCount = 66666;
    return view('admin.dashboard', compact('referralLeadsCount', 'tradingLeadsCount', 'adminCount', 'userCount', 'callCount'));
}
}
