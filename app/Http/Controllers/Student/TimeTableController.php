<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TimeTableController extends Controller
{
    public function index(): View
    {
        return view('student.timetable');
    }
}
