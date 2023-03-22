<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use App\Models\Membership;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $bootcamps = Bootcamp::all();
        $memberships = Membership::all();
        return view('home', compact('bootcamps', 'memberships'));
    }
}
