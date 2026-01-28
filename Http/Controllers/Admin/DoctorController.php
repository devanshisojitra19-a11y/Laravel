<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = \App\Models\Doctor::all();
        return view('admin.settings.index', compact('doctors'));
    }

    public function create()
    {
        return view('admin.settings.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'credentials' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:5',
            'patients_count' => 'required|integer|min:0',
            'status' => 'required|string|in:active,busy,offline',
            'image' => 'nullable|string|max:255',
        ]);

        \App\Models\Doctor::create($validated);

        return redirect()->route('admin.settings')->with('success', 'Doctor added successfully!');
    }

    public function edit(\App\Models\Doctor $doctor)
    {
        return view('admin.settings.edit', compact('doctor'));
    }

    public function update(Request $request, \App\Models\Doctor $doctor)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required|string|max:255',
            'credentials' => 'required|string|max:255',
            'experience' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:5',
            'patients_count' => 'required|integer|min:0',
            'status' => 'required|string|in:active,busy,offline',
            'image' => 'nullable|string|max:255',
        ]);

        $doctor->update($validated);

        return redirect()->route('admin.settings')->with('success', 'Doctor updated successfully!');
    }

    public function destroy(\App\Models\Doctor $doctor)
    {
        $doctor->delete();
        return redirect()->route('admin.settings')->with('success', 'Doctor deleted successfully!');
    }
}
