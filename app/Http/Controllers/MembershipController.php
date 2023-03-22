<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $memberships = Membership::where('name', 'like', '%' . request('search') . '%')->orWhere('portfolio', 'like', '%' . request('search') . '%')->orWhere('live_session', 'like', '%' . request('search') . '%')->orWhere('mentoring', 'like', '%' . request('search') . '%')->orWhere('job_guarantee', 'like', '%' . request('search') . '%')->orWhere('price', 'like', '%' . request('search') . '%')->paginate(5);
        } else {
            $memberships = Membership::paginate(5);
        }
        $count = $memberships->count();
        return view('admin.memberships.index', compact('memberships', 'count'));
    }

    public function create()
    {
        return view('admin.memberships.create');
    }

    public function store()
    {
        $name = request('name');
        $portfolio = request('portfolio');
        $live_session = request('live_session');
        $mentoring = request('mentoring');
        $job_guarantee = request('job_guarantee');
        $price = request('price');
        Membership::create(['name' => $name, 'portfolio' => $portfolio, 'live_session' => $live_session, 'mentoring' => $mentoring, 'job_guarantee' => $job_guarantee, 'price' => $price]);
        return redirect('/memberships');
    }

    public function edit($id)
    {
        $membership = Membership::findOrFail($id);
        return view('admin.memberships.edit', compact('membership'));
    }

    public function update($id)
    {
        $membership = Membership::findOrFail($id);
        $membership->name = request('name');
        $membership->portfolio = request('portfolio');
        $membership->live_session = request('live_session');
        $membership->mentoring = request('mentoring');
        $membership->job_guarantee = request('job_guarantee');
        $membership->price = request('price');
        $membership->save();
        return redirect('/memberships');
    }

    public function destroy($id)
    {
        $membership = Membership::findOrFail($id);
        $membership->delete();
        return redirect('/memberships');
    }
}
