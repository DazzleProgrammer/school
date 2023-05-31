<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function index()
    {
        $Teachers = Teacher::all();
        return view('teacher.index')->with('teacher', $Teachers);
    }


    public function create()
    {
        return view('teacher.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Teacher::create($input);
        return redirect('teacher')->with('flash_message', 'Teacher Addedd!');
    }


    public function show($id)
    {
        $Teacher = Teacher::find($id);
        return view('teacher.show')->with('teacher', $Teacher);
    }


    public function edit($id)
    {
        $Teacher = Teacher::find($id);
        return view('teacher.edit')->with('teacher', $Teacher);
    }


    public function update(Request $request, $id)
    {
        $Teacher = Teacher::find($id);
        $input = $request->all();
        $Teacher->update($input);
        return redirect('teacher')->with('flash_message', 'Teacher Updated!');
    }


    public function destroy($id)
    {
        Teacher::destroy($id);
        return redirect('teacher')->with('flash_message', 'Teacher deleted!');
    }
}
