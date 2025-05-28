<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Make sure the Student model is imported

class StudentController extends Controller
{
    public function handleForm(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');

        // Fix: Correct array syntax using =>, not ->
        Student::create($request->all());

        // Fix: correct function name is `compact`, not `compacons`
        return view('formStudent.result', compact('name', 'email'));
    }

    public function Form() {
        return view('formStudent.form');
    }
}
