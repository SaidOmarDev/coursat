<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('courses.index', [
            'courses' => Course::all()
        ]);
    }

    public function show(Course $course)
    {
        return view('courses.show', [
            'course' => $course,
            'courses' => Course::all()
        ]);
    }
}
