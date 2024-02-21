<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentMasterlistController extends Controller
{
    public function showData() {
        $students = Student::all();

        return view('student.masterlist', ['students' => $students]);
    }

}
