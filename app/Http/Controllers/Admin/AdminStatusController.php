<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class AdminStatusController extends Controller
{
    public function index()
    {
        $status = Status::all();
        return view('admin.status.index', compact('status'));
    }

    public function create()
    {
        return view('admin.status.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3'
        ]);

        Status::create([
           'name' =>  $request->get('name')
        ]);

        return redirect()->route('admin.status.index');
    }

    public function edit(int $id, Request $request)
    {
        $status = Status::find($id)->first();

        return view('admin.status.edit', compact('status'));
    }

    public function update(int $id, Request $request)
    {
        $request->validate([
            'name' => 'required|min:3'
        ]);

        Status::find($id)->update([
            'name' => $request->get('name')
        ]);

        return redirect()->route('admin.status.index');
    }

    public function delete($id)
    {
        $status = Status::find($id)->first();
        $status->delete();

        return redirect()->route('admin.status.index');
    }
}
