<?php

namespace  App\Http\Controllers;

use App\Models\StudentList;

class StudentListController extends Controller
{
    public function index() {
        $students = StudentList::all();
        
        return view("MOD6", compact("students"));
    }
}