<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {
            $visitors = Visitor::where('name', 'like', '%' . $request->search . '%')->orWhere('email', 'like', '%' . $request->search . '%')->orWhere('phone', 'like', '%' . $request->search . '%')->paginate(5);
        } else {
            $visitors = Visitor::paginate(5);
        }
        $count = $visitors->count();
        return view('admin.visitors.index', compact('visitors', 'count'));
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;
        Visitor::create(['name' => $name, 'email' => $email, 'phone' => $phone, 'message' => $message]);
        return redirect('/');
    }
}
