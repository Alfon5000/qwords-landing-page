<?php

namespace App\Http\Controllers;

use App\Models\Bootcamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request)
    {
        $title = request('title');
        $image = $request->file('image')->store('bootcamp-images');
        $description = request('description');
        Bootcamp::create(['title' => $title, 'image' => $image, 'description' => $description]);
        return redirect('/bootcamps');
    }

    public function edit($id)
    {
        $bootcamp = Bootcamp::findOrFail($id);
        return view('admin.bootcamps.edit', compact('bootcamp'));
    }

    public function update(Request $request, $id)
    {
        $bootcamp = Bootcamp::findOrFail($id);
        $bootcamp->title = request('title');
        $bootcamp->image = $request->file('image')->store('bootcamp-images');
        $bootcamp->description = request('description');
        $bootcamp->save();
        Storage::delete(request('old_image'));
        return redirect('/bootcamps');
    }

    public function destroy($id)
    {
        $bootcamp = Bootcamp::findOrFail($id);
        $bootcamp->delete();
        Storage::delete($bootcamp->image);
        return redirect('/bootcamps');
    }
}
