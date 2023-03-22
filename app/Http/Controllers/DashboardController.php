<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use App\Models\Membership;
use App\Models\Visitor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $count_bootcamps = Bootcamp::all()->count();
        $count_memberships = Membership::all()->count();
        $count_visitors = Visitor::all()->count();
        return view('admin.dashboard', compact('count_bootcamps', 'count_memberships', 'count_visitors'));
    }
}
