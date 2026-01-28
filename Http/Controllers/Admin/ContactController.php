<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = \App\Models\ContactUs::latest()->get();
        return view('admin.contact.index', compact('contacts'));
    }

    public function destroy(\App\Models\ContactUs $contact)
    {
        $contact->delete();
        return redirect()->route('admin.contact-us')->with('success', 'Message deleted successfully!');
    }
}
