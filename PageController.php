<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $doctors = \App\Models\Doctor::all();
        return view('home', compact('doctors'));
    }

    public function about()
    {
        return view('about');
    }

    public function departments()
    {
        return view('departments');
    }

    public function services()
    {
        return view('services');
    }

    public function doctors()
    {
        return view('doctors');
    }

    public function contact()
    {
        return view('contact');
    }

    public function contactSubmit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        \App\Models\ContactUs::create($validated);
        
        if ($request->ajax()) {
            return response('OK');
        }

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function appointment()
    {
        return view('appointment');
    }

    public function departmentDetails()
    {
        return view('department-details');
    }

    public function serviceDetails()
    {
        return view('service-details');
    }

    public function testimonials()
    {
        return view('testimonials');
    }

    public function faq()
    {
        return view('faq');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function terms()
    {
        return view('terms');
    }

    public function privacy()
    {
        return view('privacy');
    }
}