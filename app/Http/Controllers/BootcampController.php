<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use Illuminate\Http\Request;

class BootcampController extends Controller
{
    public function index()
    {
        if (request('search')) {
            $bootcamps = Bootcamp::where('title', 'like', '%' . request('search') . '%')->orWhere('description', 'like', '%' . request('search') . '%')->paginate(5);
        } else {
            $bootcamps = Bootcamp::paginate(5);
        }
        $count = $bootcamps->count();
        return view('admin.bootcamps.index', compact('bootcamps', 'count'));
    }

    public function create()
    {
        return view('admin.bootcamps.create');
    }

    public function store()
    {
        $title = request('title');
        $description = request('description');
        Bootcamp::create(['title' => $title, 'description' => $description]);
        return redirect('/bootcamps');
    }

    public function edit($id)
    {
        $bootcamp = Bootcamp::findOrFail($id);
        return view('admin.bootcamps.edit', compact('bootcamp'));
    }

    public function update($id)
    {
        $bootcamp = Bootcamp::findOrFail($id);
        $bootcamp->title = request('title');
        $bootcamp->description = request('description');
        $bootcamp->save();
        return redirect('/bootcamps');
    }

    public function destroy($id)
    {
        $bootcamp = Bootcamp::findOrFail($id);
        $bootcamp->delete();
        return redirect('/bootcamps');
    }
}
