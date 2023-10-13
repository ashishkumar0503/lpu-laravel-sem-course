<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    function showForm() {
        return view('form');
    }
    function processForm(Request $request)
    {
        // To show data on view
        // $formData = $request->all();
        // return view('form', compact('formData'));

        // $fname = $request->input('fname');
        // $lname = $request->input('lname');
        // $email = $request->input('email');
        // return redirect()->back()->with('success', 'Form submitted successfully!');

        return ("Form submitted successfully...");
    }
}
